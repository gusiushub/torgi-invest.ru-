<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/morphext.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
<?php $this->beginBody() ?>

<!--<div class="wrap">-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
//    ]);
//    NavBar::end();
//    ?>
<!---->
<!--    <div class="container">-->
<!--        --><?//= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><?//= Alert::widget() ?>
<!--        --><?//= $content ?>
<!--    </div>-->
<!--</div>-->
<!---->
<!--<footer class="footer">-->
<!--    <div class="container">-->
<!--        <p class="pull-left">&copy; My Company --><?//= date('Y') ?><!--</p>-->
<!---->
<!--        <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->


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
                    <img src="assets/img/logo.png" alt="">
                </a>
                <!--end navbar-brand-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--end navbar-toggler-->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="#page-top">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#what-we-do">What We Do</a>
                        <a class="nav-item nav-link" href="#our-works">Our Works</a>
                        <a class="nav-item nav-link" href="#the-team">The Team</a>
                        <a class="nav-item nav-link" href="#about-us">About Us</a>
                        <a class="nav-item nav-link" href="#blog">Blog</a>
                        <a class="nav-item nav-link" href="#contact">Contact</a>
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
                            <img src="assets/img/bg-01.jpg" alt="">
                        </div>
                        <div class="slide img-into-bg">
                            <img src="assets/img/bg-02.jpg" alt="">
                        </div>
                        <div class="slide img-into-bg">
                            <img src="assets/img/bg-03.jpg" alt="">
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
                    <h2 class="reveal">What We Do</h2>
                </div>
                <!--end block-title-->

                <div class="row">

                    <div class="col-md-4">
                        <div class="box">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image">
                                        <img src="assets/img/icon-screen.png" class="" alt="">
                                    </div>
                                    <!--end box__image-->
                                    <h4 class="reveal">Webdesign</h4>
                                </div>
                                <!--end box__header-->
                                <div class="box__content">
                                    <p>Duis volutpat odio nec nulla imperdiet egestas. Nullam eu lobortis ipsum</p>
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
                                        <img src="assets/img/icon-camera.png" class="" alt="">
                                    </div>
                                    <!--end box__image-->
                                    <h4 class="reveal">Photography</h4>
                                </div>
                                <!--end box__header-->
                                <div class="box__content">
                                    <p>Duis volutpat odio nec nulla imperdiet egestas. Nullam eu lobortis ipsum</p>
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
                                        <img src="assets/img/icon-thumb-up.png" class="" alt="">
                                    </div>
                                    <!--end box__image-->
                                    <h4 class="reveal">Social Marketing</h4>
                                </div>
                                <!--end box__header-->
                                <div class="box__content">
                                    <p>Phasellus tincidunt metus vel ex pharetra sagittis. Maecenas at convallis dui</p>
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
                    <h2 class="reveal">Our Works</h2>
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
                                    <img src="assets/img/img-01.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <a href="assets/img/img-02.jpg" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Architecture</h5>
                                    <h3 class="reveal">Hills Apartment</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="assets/img/img-02.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <a href="assets/img/img-03.jpg" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Branding</h5>
                                    <h3 class="reveal">Story Restaurant</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="assets/img/img-03.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <a href="assets/img/img-04.jpg" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Industrial Design</h5>
                                    <h3 class="reveal">Room Furniture</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="assets/img/img-04.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <a href="assets/img/img-05.jpg" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Branding</h5>
                                    <h3 class="reveal">Maracana Cups</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="assets/img/img-05.jpg" alt="">
                                </div>
                            </a>
                            <!--end gallery__image-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <a href="assets/img/img-06.jpg" class="gallery__image popup-image">
                                <div class="gallery__caption">
                                    <h5>Art</h5>
                                    <h3 class="reveal">Timeless Motion</h3>
                                </div>
                                <div class="img-into-bg">
                                    <img src="assets/img/img-06.jpg" alt="">
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
                        <h2 class="reveal">About Us</h2>
                    </div>
                    <!--end block-title-->

                    <div class="row">
                        <div class="col-md-7">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id arcu iaculis,
                                rutrum nunc ac, pellentesque risus. Vivamus hendrerit ligula nisl, at venenatis mi
                                cursus et. Sed vitae ante quis tellus iaculis placerat quis nec urna. Morbi eget
                                metus in odio cursus faucibus. Praesent metus diam, finibus eget turpis in, cursus
                                accumsan eros. Morbi euismod metus arcu, quis venenatis massa ultrices eu.
                                In sagittis consequat lectus ac venenatis. Praesent in ipsum ut libero  lacinia
                                eleifend. Nunc vitae porttitor ante, ut vehicula velit. In varius massa ut
                                scelerisque commodo.
                            </p>
                            <a href="#contact" class="btn btn-default mb-4">Contact Us</a>
                        </div>
                        <!--end col-md-7-->
                        <div class="col-md-5">
                            <img class="width-100 shadow rounded-corners" src="assets/img/img-07.jpg" alt="">
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

        <section class="pb-4 block skew-down-left skew-up-right" id="the-team">
            <div class="container">
                <div class="block__wrapper">
                    <div class="block__title">
                        <h2 class="reveal">The Team</h2>
                    </div>
                    <!--end block-title-->

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="person">
                                <h4 class="reveal">Jane Doe</h4>
                                <h5>Company CEO</h5>
                                <div class="person__image">
                                    <div class="person__social">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                    <div class="img-into-bg">
                                        <img src="assets/img/person-01.jpg" alt="">
                                    </div>
                                </div>
                                <!--end person__image-->
                            </div>
                            <!--end person-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="person">
                                <h4 class="reveal">Suzane Sparks</h4>
                                <h5>Accountant</h5>
                                <div class="person__image">
                                    <div class="person__social">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                    <div class="img-into-bg">
                                        <img src="assets/img/person-02.jpg" alt="">
                                    </div>
                                </div>
                                <!--end person__image-->
                            </div>
                            <!--end person-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="person">
                                <h4 class="reveal">John Peters</h4>
                                <h5>Head of Marketing</h5>
                                <div class="person__image">
                                    <div class="person__social">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                    <div class="img-into-bg">
                                        <img src="assets/img/person-03.jpg" alt="">
                                    </div>
                                </div>
                                <!--end person__image-->
                            </div>
                            <!--end person-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="person">
                                <h4 class="reveal">Edward Palmer</h4>
                                <h5>SEO Expert</h5>
                                <div class="person__image">
                                    <div class="person__social">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                    <div class="img-into-bg">
                                        <img src="assets/img/person-04.jpg" alt="">
                                    </div>
                                </div>
                                <!--end person__image-->
                            </div>
                            <!--end person-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                </div>
                <!--end block__wrapper-->
            </div>
            <!--end container-->
            <div class="background-wrapper" data-background-color="#eeeeee">
                <div class="background background--image opacity-5 background--repeat-repeat">
                    <img src="assets/img/pattern-topo.png" alt="">
                </div>
            </div>
            <!--end background-->
        </section>
        <!--end #our-team.block-->

        <!--BLOG ************************************************************************************************-->

        <section class="pt-4 block" id="blog">
            <div class="container">
                <div class="block__wrapper">
                    <div class="block__title">
                        <h2 class="reveal">Blog</h2>
                    </div>
                    <!--end block-title-->

                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <a href="#" class="box box--image">
                                <div class="box__wrapper no-shadow">
                                    <div class="box__header">
                                        <div class="box__image img-into-bg">
                                            <img src="assets/img/blog-01.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--end box__wrapper-->
                                    <div class="box__content px-0">
                                        <h5>02.03.2018</h5>
                                        <h4 class="reveal">How To Become More Creative</h4>
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id
                                            arcu iaculis, rutrum nunc ac, pellentesque risus. Vivamus hendrerit
                                        </p>
                                        <div class="additional-info">
                                            <figure>
                                                <i class="fa fa-comment"></i>
                                                <span>20</span>
                                            </figure>
                                            <figure>
                                                <i class="fa fa-heart"></i>
                                                <span>46</span>
                                            </figure>
                                        </div>
                                        <!--end additional-info-->
                                    </div>
                                    <!--end box__content-->
                                </div>
                                <!--end box__wrapper-->
                            </a>
                            <!--end box-->
                        </div>
                        <!--end col-xl-4-->

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <a href="#" class="box box--image">
                                <div class="box__wrapper no-shadow">
                                    <div class="box__header">
                                        <div class="box__image img-into-bg">
                                            <img src="assets/img/blog-02.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--end box__header-->
                                    <div class="box__content px-0">
                                        <h5>02.03.2018</h5>
                                        <h4 class="reveal">10 Tips For Better Photography</h4>
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id
                                            arcu iaculis, rutrum nunc ac, pellentesque risus. Vivamus hendrerit
                                        </p>
                                        <div class="additional-info">
                                            <figure>
                                                <i class="fa fa-comment"></i>
                                                <span>20</span>
                                            </figure>
                                            <figure>
                                                <i class="fa fa-heart"></i>
                                                <span>46</span>
                                            </figure>
                                        </div>
                                        <!--end additional-info-->
                                    </div>
                                    <!--end box__content-->
                                </div>
                                <!--end box__wrapper-->
                            </a>
                            <!--end box-->
                        </div>
                        <!--end col-xl-4-->

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <a href="#" class="box box--image">
                                <div class="box__wrapper no-shadow">
                                    <div class="box__header">
                                        <div class="box__image img-into-bg">
                                            <img src="assets/img/blog-03.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--end box__header-->
                                    <div class="box__content px-0">
                                        <h5>02.03.2018</h5>
                                        <h4 class="reveal">Refresh Your Mind and Body</h4>
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id
                                            arcu iaculis, rutrum nunc ac, pellentesque risus. Vivamus hendrerit
                                        </p>
                                        <div class="additional-info">
                                            <figure>
                                                <i class="fa fa-comment"></i>
                                                <span>20</span>
                                            </figure>
                                            <figure>
                                                <i class="fa fa-heart"></i>
                                                <span>46</span>
                                            </figure>
                                        </div>
                                        <!--end additional-info-->
                                    </div>
                                    <!--end box__content-->
                                </div>
                                <!--end box__wrapper-->
                            </a>
                            <!--end box-->
                        </div>
                        <!--end col-xl-4-->
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end container-->
        </section>
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
                    <h2>Contact</h2>
                </div>
                <!--end block-title-->
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <h4>Our Address</h4>
                                <address>
                                    3869 Shearwood Forest Drive
                                    <br>
                                    Glendale, NH 03246
                                    <br>
                                    United States
                                </address>
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
                                <button type="submit" class="btn pull-right btn-default" id="form-contact-submit">Send a Message</button>
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

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/isInViewport.jquery.js"></script>
<script src="assets/js/jquery.particleground.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/pace.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
<script src="assets/js/morphext.min.js"></script>
<script src="assets/js/custom.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
