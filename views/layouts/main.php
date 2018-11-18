<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta name="yandex-verification" content="6ba011f93db29a21" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="ThemeStarz">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
        <?= Html::csrfMetaTags() ?>

        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
<?php $this->beginBody() ?>


<?= $content ?>

<!--    <script src="../../web/js/jquery-3.2.1.min.js"></script>-->
<!--    <script src="../../web/js/popper.min.js"></script>-->
<!--    <script src="../../web/bootstrap/js/bootstrap.min.js"></script>-->
<!--    <script src="../../web/js/isInViewport.jquery.js"></script>-->
<!--    <script src="../../web/js/jquery.particleground.min.js"></script>-->
<!--    <script src="../../web/js/jquery.magnific-popup.min.js"></script>-->
<!--    <script src="../../web/js/owl.carousel.min.js"></script>-->
<!--    <script src="../../web/js/pace.min.js"></script>-->
<!--    <script src="../../web/js/jquery.validate.min.js"></script>-->
<!--    <script src="../../web/js/jquery-validate.bootstrap-tooltip.min.js"></script>-->
<!--    <script src="../../web/js/morphext.min.js"></script>-->
<!--    <script src="../../web/js/custom.js"></script>-->
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
