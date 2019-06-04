<?php

namespace app\controllers;
use app\models\Image;
use yii\web\Controller;
class ImageviewController extends Controller
{
    public function actionIndex($id)
    {
        echo $id;
        return $this->renderPartial('imageview');
    }
    public function actionImageView($id){
        //echo $id;

//        $data = new Image();
//        $image = $data->getAllImage($id);
//        return $this->render('index',['data'=>$image]);
    }
}

?>