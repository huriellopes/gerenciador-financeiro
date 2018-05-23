<?php

use GERENFin\Application;
use GERENFin\Plugins\RoutePlugin;
use GERENFin\ServiceContainer;

require_once __DIR__ . '/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new RoutePlugin());

$app->get('/', function() {
    echo "Hello World!";
});

$app->start();