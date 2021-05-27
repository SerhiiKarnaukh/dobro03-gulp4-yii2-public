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
        'https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap&subset=cyrillic',
        'css/style.min.css',
    ];
    public $js = [
//        'https://maps.googleapis.com/maps/api/js?key=AIzaSyC0a54iXTAJxdCSlGwbMJoB1FHTrB1J1WE',
        'js/all.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
