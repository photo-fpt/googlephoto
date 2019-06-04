<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
 ?>
<header class="mdc-top-app-bar mdc-top-app-bar--fixed" id="app-bar">
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <a href="#" class="demo-menu material-icons mdc-top-app-bar__navigation-icon">menu</a>
            <a href="<?= Yii::$app->homeUrl ?>" style="text-decoration: none;color: white;padding-left: 27px;"><span class="mdc-top-app-bar__title">My Photos</span></a>
        </section>
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-content">

                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon" style="background-color:#651fff">
                    <i class="material-icons mdc-text-field__icon icon-search" style="color: white">search</i>
                    <input type="text" id="my-input" class="mdc-text-field__input" style="color: white" onclick="location.href='<?= Yii::$app->homeUrl."search" ?>'">
                    <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label for="my-input" class="mdc-floating-label" style="color: #CDCDCD;" >Tìm kiếm ảnh của bạn</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>

        </section>
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
            <a href="#" class="material-icons mdc-top-app-bar__action-item" aria-label="Create">add_box</a>
            <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
            <?= $form->field($model, 'image[]')->fileInput(['multiple'=>true,'accept'=>'image/*',
                'onchange'=>'this.form.submit()','style'=>'display:none']) ?>
            <?php ActiveForm::end(); ?>
<!--            <a href="#" class="material-icons mdc-top-app-bar__action-item" aria-label="Upload" id="btnFileUpload">cloud_upload</a>-->
            <a href="#" class="material-icons mdc-top-app-bar__action-item" aria-label="User">account_circle</a>
        </section>
    </div>
</header>
<!--<script type="text/javascript">-->
<!--    window.onload = function () {-->
<!--        var fileupload = document.getElementById("FileUpload");-->
<!--        var submit = document.getElementById("form");-->
<!--        //var filePath = document.getElementById("spnFilePath");-->
<!--        var button = document.getElementById("btnFileUpload");-->
<!--        button.onclick = function () {-->
<!--            fileupload.click();-->
<!--        };-->
<!--        fileupload.onchange = function () {-->
<!--            var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];-->
<!--            document.getElementById("form").submit();-->
<!--            //filePath.innerHTML = "<b>Selected File: </b>" + fileName;-->
<!--            console.log(fileName);-->
<!--            //console.log(fileType);-->
<!--        };-->
<!--    };-->
<!--</script>-->

