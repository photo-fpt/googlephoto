<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\widgets\headerdetailWidget;

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo Yii::$app->homeUrl?>css/style.css">

</head>
<body>
<?php $this->beginBody() ?>
<div class="mdc-drawer-scrim "></div>
<div class="mdc-drawer-app-content">
    
    <?= headerdetailWidget::widget(); ?>
    
    <main class="main-content" id="main-content">
        <div class="mdc-top-app-bar--fixed-adjust">
            Đây là slide ảnh
        </div> 
    </main>
</div>
<script>

</script>
<?php $this->endBody() ?>
</body>
</html>
