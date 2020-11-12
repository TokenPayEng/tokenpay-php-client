<?php

require_once('config/sample_config.php');

$request = array(
    'name' => 'Name',
    'surname' => 'Surname',
    'email' => 'email@mail.com',
    'tckn' => '52059294929',
    'gsmNumber' => '905555555555',
    'buyerExternalId' => '8783943894'
);

$response = FunctionalTestConfig::tokenpay()->onboarding()->createBuyer($request);

print_r($response);
