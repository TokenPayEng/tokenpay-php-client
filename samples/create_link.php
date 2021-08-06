<?php

require_once('config/sample_config.php');

$request = array(
    'price' => 10,
    'name' => "test link",
    'description' => "Test Link for payment",
    'stock' => 100,
    'enabledInstallments' => "1,2,3,6",
    'expireDate' => '2030-01-11T00:00:00'
);

$response = FunctionalTestConfig::tokenpay()->link()->createLink($request);

print_r($response);
