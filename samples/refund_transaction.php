<?php

require_once('config/sample_config.php');

use Tokenpay\Model\RefundDestinationType;

$request = array(
    'paymentTransactionId' => 1,
    'conversationId' => uniqid(),
    'refundPrice' => 20,
    'refundDestinationType' => RefundDestinationType::CARD
);

$response = FunctionalTestConfig::tokenpay()->payment()->refundTransaction($request);

print_r($response);
