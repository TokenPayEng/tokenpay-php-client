<?php

require_once('config/sample_config.php');

use Tokenpay\Model\Status;

$request = array(
    'status' => Status::ACTIVE,
    'name' => "name",
    'token' => "token"
);

$response = FunctionalTestConfig::tokenpay()->link()->searchLinks($request);

print_r($response);
