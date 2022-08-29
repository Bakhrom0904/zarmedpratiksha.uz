<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fonts/fontawesome.all.min.css',
        'css/icons.css',
        'css/style.css',
        'css/plugin.css',
        'css/dashboard.css',
        'css/custom.css',
        'css/magnify.css',
    ];
    public $js = [
        'js/plugin.js',
        'js/main.js',
        'js/custom-swiper.js',
        'js/custom-nav.js',
        'js/magnify.min.js',
        'js/custom.js',
        'js/google-translate.js?cb=googleTranslateElementInit',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
