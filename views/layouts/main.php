<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
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



<div class="page-wrapper" id="page-top">

    <div class="loading-screen"></div>
    <!--end loading-screen-->

    <!--*********************************************************************************************************-->
    <!--************ HERO ***************************************************************************************-->
    <!--*********************************************************************************************************-->
    <header id="hero">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
<!--                    <img src="../../web/img/logo.png" alt="">-->
                </a>
                <!--end navbar-brand-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--end navbar-toggler-->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="#page-top">Главная <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#what-we-do">Что такое аукцион?</a>
                        <a class="nav-item nav-link" href="#our-works">Наши предложения</a>
<!--                        <a class="nav-item nav-link" href="#the-team">The Team</a>-->
                        <a class="nav-item nav-link" href="#about-us">О нас</a>
<!--                        <a class="nav-item nav-link" href="#blog">Blog</a>-->
                        <a class="nav-item nav-link" href="#contact">Заказать звонок / Назначить встречу</a>
                    </div>
                    <!--end navbar-nav-->
                </div>
                <!--end collapse-->
            </div>
            <!--end container-->
        </nav>
        <!--end navbar-->

        <div class="container">
            <div class="row">
                <div class="hero__outer-wrapper">
                    <div class="hero__inner-wrapper align-middle">
                        <h1>
                            <span class="hero__title">We Are</span>
                            <a class="hero__title text-carousel" href="#our-works" >Design, Creative, Architecture</a>
                            <br>
                            <span class="hero__title">Studio</span>
                        </h1>
                        <!--end h1-->
                        <a href="#what-we-do" class="hero__link align-items-center">
                            <figure class="mb-0 align-middle"></figure>
                            Check It
                        </a>
                        <!--end hero__link-->
                    </div>
                    <!--end container-->
                </div>
                <!--end hero__inner-wrapper-->
            </div>
            <!--end row-->
        </div>
        <!--end hero__outer-wrapper-->

        <div class="hero__background skew-down-left">
            <!--<div class="background-wrapper skew-down-left" data-background-color="#000000" data-parallax="scroll" data-parallax-speed="3" >-->
            <!--<div class="background&#45;&#45;image opacity-30 background&#45;&#45;repeat-repeat parallax-element">-->
            <!--<img src="assets/img/bg-01.jpg" alt="">-->
            <!--</div>-->
            <!--</div>-->
            <div class="background-wrapper" data-parallax="scroll" data-parallax-speed="3" data-background-color="#000000" >
                <div class="background opacity-40">
                    <div class="owl-carousel hero__slider parallax-element" data-owl-items="1" data-owl-autoplay="1" data-owl-dots="0" data-owl-nav="1" data-owl-loop="1" data-owl-fadeout="1">
                        <div class="slide img-into-bg">
                            <img src="../../web/img/bg-01.jpg" alt="">
                        </div>
                        <div class="slide img-into-bg">
                            <img src="../../web/img/bg-02.jpg" alt="">
                        </div>
                        <div class="slide img-into-bg">
                            <img src="../../web/img/bg-03.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--end background-->
        </div>
    </header>
    <!--end hero-->

    <!--*********************************************************************************************************-->
    <!--************ CONTENT ************************************************************************************-->
    <!--*********************************************************************************************************-->
    <div id="content">

        <!--WHAT WE DO ******************************************************************************************-->

        <section class="pb-0 block" id="what-we-do">
            <div class="container">
                <div class="block__title">
                    <h2 class="reveal">Что такое аукцион недвижимости? </h2>
                </div>
                <!--end block-title-->

                <div class="row">

                    <div class="col-md-4">
                        <div class="box">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image">
                                        <img src="../../web/img/icon-screen.png" class="" alt="">
                                    </div>
                                    <!--end box__image-->
                                    <h4 class="reveal">Что такое аукцион недвижимости?</h4>
                                </div>
                                <!--end box__header-->
                                <div class="box__content">
                                    <p style="font-size: 1.5rem;">Не секрет, что примерно каждый третий кредит, каждая пятая ипотека в России не выплачиваются. Иногда люди берут непосильную для себя ношу в виде кредита, под залог недвижимости.
                                        Банк забирает недвижимость у заемщика и, так как банк на прямую не занимается продажей недвижимости, ему интересно избавиться от нее на аукционе. </p>
                                </div>
                                <!--end box__content-->
                            </div>
                            <!--end box__wrapper-->
                        </div>
                        <!--end box-feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4">
                        <div class="box">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image">
                                        <img src="../../web/img/icon-camera.png" class="" alt="">
                                    </div>
                                    <!--end box__image-->
                                    <h4 class="reveal">Как на этом заработать? </h4>
                                </div>
                                <!--end box__header-->
                                <div class="box__content">
                                    <p style="font-size: 1.5rem;">Недвижимость, выставленная на аукцион сильно ниже рыночной стоимости данных объектов. Поэтому не стоит тянуть с принятием решения по участию в торгах. Зачастую разница между стоимостью лота и его рыночной стоимостью достигает 30-40%. </p>
                                </div>
                                <!--end box__content-->
                            </div>
                            <!--end box__wrapper-->
                        </div>
                        <!--end box-feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4">
                        <div class="box">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image">
                                        <img src="../../web/img/icon-thumb-up.png" class="" alt="">
                                    </div>
                                    <!--end box__image-->
                                    <h4 class="reveal">Social Marketing</h4>
                                </div>
                                <!--end box__header-->
                                <div class="box__content">
                                    <p style="font-size: 1.5rem;">Phasellus tincidunt metus vel ex pharetra sagittis. Maecenas at convallis dui</p>
                                </div>
                                <!--end box__content-->
                            </div>
                            <!--end box__wrapper-->
                        </div>
                        <!--end box-feature-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end #what-we-do.block-->

        <!--OUR WORKS ********************************************************************************************-->

        <section class="pb-0 block" id="our-works">
            <div class="container">
                <div class="block__title">
                    <h2 class="reveal">Наши предложения</h2>
                </div>
                <!--end block-title-->
            </div>
            <!--end container-->

            <div class="gallery skew-down-left skew-up-right">
                <div class="container-fluid px-0">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="gallery__image video-popup">
                                <div class="gallery__caption">
                                    <h3>
                                        <i class="fa fa-play-circle"></i>
                                    </h3>
                                    <h5>Interior Design</h5>
                                    <h3 class="reveal">Bathroom Refresh</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="../../web/img/img-01.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <a href="../../web/img/img-02.jpg" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Architecture</h5>
                                    <h3 class="reveal">Hills Apartment</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="../../web/img/img-02.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <a href="../../web/img/img-03.jpg" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Branding</h5>
                                    <h3 class="reveal">Story Restaurant</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="../../web/img/img-03.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <a href="../../web/img/img-04.jpg" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Industrial Design</h5>
                                    <h3 class="reveal">Room Furniture</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="../../web/img/img-04.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <a href="../../web/img/img-05.jpg" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Branding</h5>
                                    <h3 class="reveal">Maracana Cups</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="../../web/img/img-05.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <a href="../../web/img/img-06.jpg" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Art</h5>
                                    <h3 class="reveal">Timeless Motion</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="../../web/img/img-06.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-fluid-->
            </div>
            <!--end gallery-->

            <div class="my-2 text-center">
                <a href="#" class="btn btn-primary">Load More</a>
            </div>
            <!--end button my-2 text-center-->
        </section>
        <!--end #our-works.block-->

        <!--ABOUT US ********************************************************************************************-->

        <section class="pt-4 block" id="about-us">
            <div class="container">
                <div class="block__wrapper">
                    <div class="block__title">
                        <h2 class="reveal">Что предлагаем мы? </h2>
                    </div>
                    <!--end block-title-->

                    <div class="row">
                        <div class="col-md-7">
                            <p style="font-size: 1.5rem;">
                                Мы непосредственно предлагаем поучаствовать в торгах и сильно сэкономить на покупке недвижимости.
                                Алгоритм действий таков:

                                - Мы подбираем вам наиболее подходящий вам лот.
                                При личной встрече в офисе просматриваем список актуальных объектов недвижимости.

                                - Регистрируем заявку на участие в аукционе.
                                Собираем пакет документов и оплачиваем пошлину.

                                - Заносим на счет 10% от стоимости лота для участия.

                                - Выигрываем аукцион. Доносим оставшиеся 90%.

                                - Получаем право собственности на объект.

                                По срокам процедур, цене лота или депозита, и многие другие индивидуальные вопросы расскажем при встрече в офисе.

                            </p>
                            <a href="#contact" class="btn btn-default mb-4">Contact Us</a>
                        </div>
                        <!--end col-md-7-->
                        <div class="col-md-5">
                            <img class="width-100 shadow rounded-corners" src="../../web/img/img-07.jpg" alt="">
                        </div>
                        <!--end col-md-5-->
                    </div>
                    <!--end row-->
                </div>
                <!--end block__wrapper-->
            </div>
            <!--end container-->
        </section>
        <!--end #about-us.block-->

        <!--THE TEAM ********************************************************************************************-->


        <!--end #our-team.block-->

        <!--BLOG ************************************************************************************************-->


        <!--end #blog.block-->

    </div>
    <!--end content-->

    <!--*********************************************************************************************************-->
    <!--************ FOOTER *************************************************************************************-->
    <!--*********************************************************************************************************-->
    <footer id="footer" class="skew-up-right">
        <div class="container">
            <div class="block__wrapper">
                <div class="block__title" id="contact">
                    <h2>Контакты</h2>
                </div>
                <!--end block-title-->
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <h4>Наш адрес</h4>
                                <address>
                                    3869 Shearwood Forest Drive
                                    <br>
                                    Glendale, NH 03246
                                    <br>
                                    United States
                                </address>

                            </div>
                            <div class="form-group clearfix">
                                <button style="font-size: 1.5rem;" type="submit" class="btn pull-right btn-default" id="form-contact-submit">Заказать звонок</button>
                            </div>

                            <!--end col-sm-6 col-lg-12-->
                            <div class="col-sm-6 col-lg-12">
                                <div class="py-4">
                                    <figure>
                                        <i class="fa fa-envelope width-20px"></i>
                                        <a href="#">hello@example.com</a>
                                    </figure>
                                    <figure>
                                        <i class="fa fa-facebook width-20px"></i>
                                        <a href="#">we.are.scrape</a>
                                    </figure>
                                    <figure>
                                        <i class="fa fa-twitter width-20px"></i>
                                        <a href="#">scrape.agency</a>
                                    </figure>
                                </div>
                                <!--end py-4-->
                            </div>
                            <!--end col-sm-6 col-lg-12-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-xl-5 col-lg-6 col-md-12 col-sm-12-->
                    <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                        <h4>Contact Form</h4>

                        <form id="form-contact" method="post" class="form clearfix">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-name">Your Name</label>
                                        <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-email">Your Email</label>
                                        <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                            </div>
                            <!--end row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form-contact-message">Your Message</label>
                                        <textarea class="form-control" id="form-contact-message" rows="8" name="message" placeholder="Your Message" required></textarea>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-12 -->
                            </div>
                            <!--end row -->
                            <div class="form-group clearfix">
                                <button style="font-size: 1.5rem;" type="submit" class="btn pull-right btn-default" id="form-contact-submit">Отправить</button>
                            </div>
                            <!--end form-group -->
                            <div class="form-contact-status"></div>
                        </form>
                        <!--end form-contact -->
                    </div>
                    <!--end col-xl-7-->
                </div>
                <!--end row-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->

        <hr class="hr-white opacity-10">
        <!--end hr-->

        <div class="container">
            <span>(C) Copyright 2017, All Rights Reserved</span>
        </div>
        <!--end container-->

        <div class="background-wrapper" data-background-color="#000000">
            <div class="background background--particles"></div>
        </div>
        <!--end background-->

    </footer>
    <!--end footer-->
</div>
<!--end page-->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/isInViewport.jquery.js"></script>
<script src="js/jquery.particleground.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery-validate.bootstrap-tooltip.min.js"></script>
<script src="js/morphext.min.js"></script>
<script src="js/custom.js"></script>



<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
