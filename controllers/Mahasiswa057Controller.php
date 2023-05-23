<?php

namespace app\controllers;
use app\models\Mahasiswa057;
use yii\data\ActiveDataProvider;

class Mahasiswa057Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa057::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
