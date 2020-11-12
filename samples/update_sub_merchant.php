<?php

require_once('config/sample_config.php');

$request = array(
    'id' => 100,
    'name' => 'sample sub merchant name',
    'address' => 'sample sub merchant address',
    'email' => 'sample@submerchant.com',
    'iban' => 'TR330006100519786457841326',
    'gsmNumber' => '905367620600',
    'contactName' => 'sample sub merchant contactName',
    'contactSurname' => 'sample sub merchant contactSurname',
    'identityNumber' => '51499549610'
);

$response = FunctionalTestConfig::tokenpay()->onboarding()->updateSubMerchant($request);

print_r($response);
