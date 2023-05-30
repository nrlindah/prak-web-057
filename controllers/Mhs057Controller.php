<?php

namespace app\controllers;

use app\models\Mhs057;
use yii\data\ActiveDataProvider;
use Yii;

class Mhs057Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mhs057::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mhs057;
        $mhs->no_induk_mahasiswa = '60200121057-'.rand(100,999);
        $mhs->nama_mahasiswa = 'Nurul Indah Ramadhani';
        $mhs->kelas = 'A';
        $mhs->status = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mhs057::findOne(['id' => $id]);
        if($mhs !== null){
            $mhs->kelas = 'C';
            $mhs->status = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mhs057::findOne(['id' => $id]);
        if($mhs->delete()){
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mhs = Mhs057::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }
}