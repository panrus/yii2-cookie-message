<?php

namespace golles\cookiemessage;

use yii\web\AssetBundle;

class CookieMessageAsset extends AssetBundle
{
    public $sourcePath = '@vendor/panrus/yii2-cookie-message/src/assets';

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
