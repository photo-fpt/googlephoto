<style>
    * {
        box-sizing: border-box;
    }

    .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        padding: 0 4px;
    }

    /* Create four equal columns that sits next to each other */
    .column {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
    }

    .column img {
        margin-top: 8px;
        vertical-align: middle;
        height: 200px;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
        .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
            float: left;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
        }
    }
</style>
<!--style="overflow-x: hidden;"-->
<body >
<div class="row">
    <?php
    $pss = date_default_timezone_set('Asia/Ho_Chi_Minh');
    //$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
    foreach ($image as $key =>$value) {
        ?>
        <div class="column" style="padding: 5px">
            <span class="mdc-typography--subtitle2"><?php
                echo $value["date_create"]." ".$value["location"];
                ?></span>
            <a href="<?php echo Yii::$app->homeUrl . "image/detail?id=".$value["image_id"]?>">
                <img src="<?php echo Yii::$app->homeUrl."web/".$value["path_image"]?>">
            </a>
        </div>
        <?php
    }
    ?>
</div>