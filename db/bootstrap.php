<?php

use GERENFin\Application;
use GERENFin\Plugins\Authplugin;
use GERENFin\Plugins\Dbplugin;
use GERENFin\ServiceContainer;

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new Dbplugin());
$app->plugin(new Authplugin());

return $app;
