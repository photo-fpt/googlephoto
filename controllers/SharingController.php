<?php

namespace app\controllers;
use yii\web\Controller;
class SharingController extends Controller
{
    public function actionIndex()
    {
        return $this->render('sharing');
    }
}

?>