<?php

require_once('config/sample_config.php');

$request = array(
    'paymentTransactionIds' => array(1, 2),
    'isTransactional' => false
);

$response = FunctionalTestConfig::tokenpay()->payment()->approvePaymentTransactions($request);

print_r($response);
