<?php

namespace app\controllers;
use yii\web\Controller;
class ArchiveController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('archive');
    }
}
?>