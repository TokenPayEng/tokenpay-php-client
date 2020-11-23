<?php

require_once(dirname(__DIR__) . '/../TokenpayBootstrap.php');

TokenpayBootstrap::init();

use Tokenpay\Request\Common\RequestOptions;
use Tokenpay\TokenPay;

class FunctionalTestConfig
{
    public static function tokenpay()
    {
        $options = new RequestOptions();
        $options->setApiKey('api-key');
        $options->setSecretKey('secret-key');
        $options->setBaseUrl('http://api-gateway.tokenpay.com.tr');
        return new TokenPay($options);
    }
}
