<?php

require_once('config/sample_config.php');

use Tokenpay\Model\SubMerchantType;

$request = array(
    'name' => 'sample sub merchant name',
    'address' => 'sample sub merchant address',
    'email' => 'sample@submerchant.com',
    'iban' => 'TR330006100519786457841326',
    'gsmNumber' => '905367620600',
    'contactName' => 'sample sub merchant contactName',
    'contactSurname' => 'sample sub merchant contactSurname',
    'identityNumber' => '51499549610',
    'subMerchantType' => SubMerchantType::PERSONAL,
    'subMerchantExternalId' => 'sampleSubMerchantSubMerchantExternalId'
);

$response = FunctionalTestConfig::tokenpay()->onboarding()->createSubMerchant($request);

print_r($response);
