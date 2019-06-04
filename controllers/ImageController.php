<?php

namespace app\controllers;

use app\models\Image;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

class ImageController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        echo $id;
        return $this->render('index');
    }
    public function actionDetail($id){
        $data = new Image();
        $data = $data->getOneImage($id);
        return $this->renderPartial('detail',['data'=>$data]);
    }
}
