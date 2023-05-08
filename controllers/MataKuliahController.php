<?php

namespace app\controllers;

class MataKuliahController extends \yii\web\Controller
{
    public function actionDosenDadar()
    {
        return $this->render('dosen-dadar');
    }

}
