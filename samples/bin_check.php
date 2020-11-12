<?php

require_once('config/sample_config.php');

$response = FunctionalTestConfig::tokenpay()->installment()->binCheck('554960');

print_r($response);
