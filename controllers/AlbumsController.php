<?php

namespace app\controllers;
use yii\web\Controller;
class AlbumsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('album');
    }
}

?>