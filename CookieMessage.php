<?php

namespace golles\cookiemessage;

use Yii;
use yii\base\Widget;
use yii\helpers\Json;

class CookieMessage extends Widget
{
    /**
     * @var array parameters for the cookie ( https://developer.mozilla.org/en-US/docs/Web/API/Document/cookie )
     * Available options:
     *
     * name:    string name for the cookie, default is CookieMessageAgreed.
     * domain:  string domain name for the cookie, default host portion of the current document location
     * expires: integer number of days this cookie will be valid for, default 30
     * max-age: integer max cookie age in seconds
     * path:    string path for the cookie, default '/'
     * secure:  boolean wheter cookie should be transmitted over secure protocol as https, default false
     */
    public $cookie = [
        'name' => 'CookieMessageAgreed',
        'domain' => null,
        'expires' => 30,
        'max-age' => null,
        'path' => '/',
        'secure' => false
    ];

    public $view = 'cookie';

    public $moreInfoLink;

    /**
     * Check if our cookie exists.
     *
     * @return bool
     */
    public function cookieExists() {
        if (isset($_COOKIE[$this->cookie['name']])){
            return true;
        }

        return false;
    }

    /**
     * Executes the widget.
     * @return string the result of widget execution to be outputted.
     */
    public function run()
    {
        if (!$this->cookieExists()) {
            $view = $this->getView();
            assets\CookieMessageAsset::register($view);
            $cookie = Json::encode($this->cookie);
            $view->registerJs("CookieMessage.init($cookie);");

            $params = [
                'moreInfoLink' => $this->moreInfoLink,
            ];

            return $this->render($this->view, $params);
        }
    }
}