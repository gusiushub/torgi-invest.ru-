<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = 'https://torgi-invest.ru/web';
    public $css = [
        'css/animate.css',
        'css/morphext.css',
        'css/style.css',
        'bootstrap/css/bootstrap.css',
        'fonts/font-awesome.css',
        'css/magnific-popup.css',
        'css/owl.carousel.min.css',
        'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700',
    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/popper.min.js',
        'bootstrap/js/bootstrap.min.js',
        'js/isInViewport.jquery.js',
        'js/jquery.particleground.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/owl.carousel.min.js',
        'js/pace.min.js',
        'js/jquery.validate.min.js',
        'js/jquery-validate.bootstrap-tooltip.min.js',
        'js/morphext.min.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        parent::init();
        // resetting BootstrapAsset to not load own css files
        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => [],
            'js' => []
        ];
    }
}
