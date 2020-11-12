<?php

require_once('config/sample_config.php');

use Tokenpay\Model\Currency;

$request = array(
    'binNumber' => '554960',
    'price' => 100,
    'currency' => Currency::TL
);

$response = FunctionalTestConfig::tokenpay()->installment()->retrieveInstallments($request);

print_r($response);
