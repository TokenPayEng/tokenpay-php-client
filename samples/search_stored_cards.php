<?php

require_once('config/sample_config.php');

$request = array(
    'cardUserKey' => 'de050909-39a9-473c-a81a-f186dd55cfef'
);

$response = FunctionalTestConfig::tokenpay()->payment()->searchStoredCards($request);

// todo: errors varsa exception firlat. yoksa json_decode edip array dön.

print_r($response);
