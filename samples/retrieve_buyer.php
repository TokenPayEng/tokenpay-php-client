<?php

require_once('config/sample_config.php');

$response = FunctionalTestConfig::tokenpay()->onboarding()->retrieveBuyer(1);

print_r($response);
