<?php

require_once('config/sample_config.php');

$request = array(
    'binNumber' => '554960',
    'price' => '100',
    'currency' => 'TRY'
);

$response = FunctionalTestConfig::tokenpay()->payment()->searchPayments($request);

print_r($response);
