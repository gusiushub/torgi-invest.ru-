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
    public $baseUrl = '@web';
    public $css = [
        'css/animate.css',
        'css/morphext.css',
        'css/style.css',
        'bootstrap/css/bootstrap.css',
        'fonts/font-awesome.css',
        'css/magnific-popup.css',
        'css/owl.carousel.min.css',
    ];
    public $js = [
        '../../web/js/jquery-3.2.1.min.js',
        '../../web/js/popper.min.js',
        '../../web/bootstrap/js/bootstrap.min.js',
        '../../web/js/isInViewport.jquery.js',
        '../../web/js/jquery.particleground.min.js',
        '../../web/js/jquery.magnific-popup.min.js',
        '../../web/js/owl.carousel.min.js',
        '../../web/js/pace.min.js',
        '../../web/js/jquery.validate.min.js',
        '../../web/js/jquery-validate.bootstrap-tooltip.min.js',
        '../../web/js/morphext.min.js',
        '../../web/js/custom.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
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
