<?php

namespace app\controllers;

use app\models\Mahasiswa057;
use app\models\Matakuliah;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa057::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('Index', [
            'dataProvider' => $dataProvider
        ]);
    }

}

public function actionMatkul()
{

    $query = Matakuliah::find();
    $dataProvider = new ActiveDataProvider(['query' => $query]);
    return $this->render('matkul', [
        'dataProvider' => $dataProvider
    ]);
}