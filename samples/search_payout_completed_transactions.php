<?php

require_once('config/sample_config.php');

use Tokenpay\Model\SettlementType;

$request = array(
    'startDate' => '2020-01-01T00:00:00',
    'endDate' => '2020-01-11T00:00:00',
    'settlementFileId', 1,
    'settlementType' => SettlementType::SETTLEMENT
);

$response = FunctionalTestConfig::tokenpay()->settlementReporting()->searchPayoutCompletedTransactions($request);

print_r($response);
