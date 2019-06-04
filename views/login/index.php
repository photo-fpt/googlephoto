<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Admin;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */
/* @var $form ActiveForm */
?>
<div class="login-index">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'username')->textInput(['placeholder'=>'Input username']) ?>
        <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Input password'])?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- login-index -->
