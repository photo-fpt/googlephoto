<?php


namespace app\controllers;


use yii\web\Controller;
use app\models\Hello;
class HelloController extends Controller
{
    public function actionIndex(){
        echo 'duong dan than thien';
       //return $this->render('index');
    }

    public function actionLogin(){
        $model = new Hello();
        $model->setLogin('canhdinh','123');
        echo $model->getLogin();
    }
}