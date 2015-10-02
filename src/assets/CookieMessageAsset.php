<?php

namespace golles\cookiemessage\assets;

use yii\web\AssetBundle;

class CookieMessageAsset extends AssetBundle
{
    public $sourcePath = '@vendor/golles/yii2-cookie-message/src';

    public $js = [
        'js/CookieMessage.js'
    ];

    public $css = [
        'css/CookieMessage.css'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}