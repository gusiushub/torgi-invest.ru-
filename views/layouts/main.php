<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <link href="../../web/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <meta name="yandex-verification" content="6ba011f93db29a21" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="Недвижимость, выставленная на аукцион, сильно ниже рыночной стоимости.
                                        Зачастую разница между стоимостью лота и его рыночной стоимостью достигает 30-40%." />
        <meta name="author" content="ThemeStarz">
        <meta name="google-site-verification" content="SUzgOPwxCeH_DZhdwbxN1ZKIE8Qv6kDzMCyWBuZrOVY" />

        <meta name="keywords" content="недвижимость, продажа недвижимости, квартира купить, квартира москва, авито недвижимость, яндекс недвижимость, циан недвижимость, недвижимость сайт" />
        <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">-->
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
<?php $this->beginBody() ?>


<?= $content ?>

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
