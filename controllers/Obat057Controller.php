<?php

namespace app\controllers;

use app\models\Obat057;
use yii\data\ActiveDataProvider;

class Obat057Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Obat057::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
