<?php

require_once('config/sample_config.php');

use Tokenpay\Model\Currency;
use Tokenpay\Model\PaymentStatus;

$request = array(
    'paymentStatus' => PaymentStatus::SUCCESS,
    'currency' => Currency::TL
);

$response = FunctionalTestConfig::tokenpay()->payment()->searchPayments($request);

print_r($response);
