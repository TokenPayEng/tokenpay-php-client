<?php

require_once('config/sample_config.php');

$request = array(
    'subMerchantId' => 2,
    'subMerchantPrice' => 10
);

$response = FunctionalTestConfig::tokenpay()->payment()->updatePaymentTransaction(100, $request);

print_r($response);
