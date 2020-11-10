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
        'css/site.css',
        'css/style.css',
        'css/animate.css',
        'css/audioplayer.css',
        'css/classy-nav.css',
        'css/font-awesome.min.css',
        'css/magnific-popup.css',
        'css/owl.carousel.min.css',

    ];
    public $js = [
    'js/jquery/jquery-2.2.4.min.js',
    'js/bootstrap/popper.min.js',
    'js/plugins/plugins.js',
    'js/active.js',

    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
