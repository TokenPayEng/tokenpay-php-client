<?php

require_once('config/sample_config.php');

use Tokenpay\Model\Currency;

$request = array(
    'binNumber' => '525864',
    'price' => 100,
    'currency' => Currency::TL
);

$response = FunctionalTestConfig::tokenpay()->installment()->searchInstallments($request);

print_r($response);
