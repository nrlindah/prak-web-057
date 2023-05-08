<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionMahasiswaDropOut()
    {
        return $this->render('mahasiswa-drop-out');
    }

}
