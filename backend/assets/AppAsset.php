<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'vendors/iconic-fonts/font-awesome/css/all.min.css',
        'vendors/iconic-fonts/flat-icons/flaticon.css',
        'vendors/iconic-fonts/cryptocoins/cryptocoins.css',
        'vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css',
        'css/slick.css',
        'css/style.css',
        'css/morris.css',
        'css/fontawesome-iconpicker.min.css'

    ];
    public $js = [
        'js/popper.min.js',
        'js/perfect-scrollbar.js',
        'js/jquery-ui.min.js',
        'js/d3.v3.min.js',
        'js/topojson.v1.min.js',
        'js/datamaps.all.min.js',
        'js/slick.min.js',
        'js/moment.js',
        'js/jquery.webticker.min.js',
        'js/Chart.bundle.min.js',
        'js/index-chart.js',
        'js/calendar.js',
        'js/framework.js',
        'js/settings.js',
        'js/fontawesome-iconpicker.min.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
