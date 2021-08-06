<?php

require_once('config/sample_config.php');

use Tokenpay\Model\Status;

$request = array(
    'status' => Status::ACTIVE,
    'price' => 10,
    'name' => "new test link",
    'description' => "new Test Link for payment",
    'stock' => 100,
    'enabledInstallments' => "1,2,3",
    'expireDate' => '2024-01-11T00:00:00'
);

$response = FunctionalTestConfig::tokenpay()->link()->updateLink(1, $request);

print_r($response);
