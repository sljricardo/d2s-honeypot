<?php

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Load all routes
require __DIR__ . "/../app/web.php";

$app->run();