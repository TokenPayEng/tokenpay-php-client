<?php

require_once('config/sample_config.php');

$request = array(
    'name' => 'Zeytinyağı Üretim'
);

$response = FunctionalTestConfig::tokenpay()->onboarding()->searchBuyers($request);

print_r($response);
