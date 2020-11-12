<?php

$loader = require dirname(__DIR__) . '/vendor/autoload.php';
$loader->addPsr4('Tokenpay\\Tests\\', __DIR__ . '/');

date_default_timezone_set('UTC');
