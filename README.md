Yii2 Cookie Message
===================
This widget will show a cookie warning that is required due to an European law.
Based on this idea: https://github.com/bizley-code/yii2-cookiemonster

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist golles/yii2-cookie-message "*"
```

or add

```
"golles/yii2-cookie-message": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
    echo \golles\cookiemessage\CookieMessage::widget([
        'moreInfoLink' => ['/page/cookies'],
    ]);
?>
```