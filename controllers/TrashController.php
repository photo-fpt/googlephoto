<?php

namespace app\controllers;
use yii\web\Controller;
class TrashController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('trash');
    }
}

?>