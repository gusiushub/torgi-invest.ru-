<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AdminAsset;
AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([

            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                [
                    'label' => 'Главная',
                    'url' => ['/'],
                    'linkOptions' => [],

                ],
                [
                    'label' => 'Добавить недвижимость',
                    'url' => ['/admin/realty/index'],
                    'visible' => !Yii::$app->user->isGuest
                ],
                [
                    'label' => 'Уведомления',
                    'url' => ['/admin/notification/index'],
                    'visible' => !Yii::$app->user->isGuest
                ],
                [
                    'label' => 'Выход',
                    'url' => ['/admin/logout'],
                    'visible' => !Yii::$app->user->isGuest
                ],
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container">

            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; Хочу лаве <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>