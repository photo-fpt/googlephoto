<?php

namespace app\controllers;

use app\models\Admin;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $admin = new Admin();
        $tb_admin = $admin->getAllAdmin();
        return $this->render('index',['admin'=>$tb_admin]);
    }
}
