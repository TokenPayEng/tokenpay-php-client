<?php

require_once('config/sample_config.php');

use Tokenpay\Model\SubMerchantType;

$request = array(
    'subMerchantType' => SubMerchantType::PERSONAL
);

$response = FunctionalTestConfig::tokenpay()->onboarding()->searchSubMerchants($request);

print_r($response);
