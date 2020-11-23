<?php

require_once('config/sample_config.php');

$request = array(
    'paymentId' => 1,
    'conversationId' => uniqid()
);

$response = FunctionalTestConfig::tokenpay()->payment()->searchPaymentTransactionRefunds($request);

print_r($response);
