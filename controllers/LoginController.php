<?php


namespace app\controllers;
use app\models\Admin;
use yii\web\Controller;
use Yii;

class LoginController extends Controller
{
    public function actionIndex(){
        $model = new Admin();
        if ($model->load(Yii::$app->request->post()))
        {
            $request = Yii::$app->request->post('Admin');
            $username = $request['username'];
            $password = $request['password'];
            if ($model->kiemtradangnhap($username,$password)== true){
                echo 'thanh cong';
                //Yii::$app->session->setFlash('LoginOk');
            }
            else{
                echo 'that bai';
                $this->redirect(Yii::$app->request->referrer);
            }
        }
        return $this->render('index',['model'=>$model]);
    }
}