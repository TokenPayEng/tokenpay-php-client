<?php

require_once('config/sample_config.php');

$request = array(
    'paymentTransactionIds' => array(1, 2),
    'isTransactional' => true
);

$response = FunctionalTestConfig::tokenpay()->payment()->disapprovePaymentTransactions($request);

print_r($response);
