<?php

require_once('config/sample_config.php');

use Tokenpay\Model\RefundDestinationType;

$request = array(
    'paymentId' => 1,
    'refundDestinationType' => RefundDestinationType::CARD
);

$response = FunctionalTestConfig::tokenpay()->payment()->refundPayment($request);

print_r($response);
