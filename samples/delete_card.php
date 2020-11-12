<?php

require_once('config/sample_config.php');

$request = array(
    'cardUserKey' => 'de050909-39a9-473c-a81a-f186dd55cfef',
    'cardToken' => 'de050909-39a9-473c-a81a-f186dd55cfex'
);

$response = FunctionalTestConfig::tokenpay()->card()->deleteCard($request);

print_r($response);
