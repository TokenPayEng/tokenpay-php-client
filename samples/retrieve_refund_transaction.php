<?php

require_once('config/sample_config.php');

$response = FunctionalTestConfig::tokenpay()->payment()->retrieveRefundTransactions(1);

print_r($response);
