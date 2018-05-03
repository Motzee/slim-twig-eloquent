<?php

session_start();
 
require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../config/config.php';
 
$app = new Slim\App($config);

$container = require __DIR__ . '/../app/containers/callAppContainers.php';

require __DIR__ . '/../app/routes.php';

$app->run();