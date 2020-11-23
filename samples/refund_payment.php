<?php

require_once('config/sample_config.php');

use Tokenpay\Model\RefundDestinationType;

$request = array(
    'paymentId' => 1,
    'conversationId' => uniqid(),
    'refundDestinationType' => RefundDestinationType::CARD
);

$response = FunctionalTestConfig::tokenpay()->payment()->refundPayment($request);

print_r($response);
