<?php

require_once('config/sample_config.php');

$request = array(
    'paymentId' => 1
);

$response = FunctionalTestConfig::tokenpay()->payment()->complete3DSPayment($request);

print_r($response);
