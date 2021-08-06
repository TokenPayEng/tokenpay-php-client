<?php

require_once('config/sample_config.php');

$response = FunctionalTestConfig::tokenpay()->link()->retrieveLink(1);

print_r($response);
