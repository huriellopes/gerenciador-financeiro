<?php

use GERENFin\Application;
use GERENFin\Models\CategoryCost;
use GERENFin\Plugins\Authplugin;
use GERENFin\Plugins\Dbplugin;
use GERENFin\Plugins\RoutePlugin;
use GERENFin\Plugins\ViewPlugin;
use GERENFin\ServiceContainer;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

require_once __DIR__ . '/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new RoutePlugin());
$app->plugin(new ViewPlugin());
$app->plugin(new Dbplugin());
$app->plugin(new Authplugin());

$app->get('/', function () use ($app) {
    $view = $app->service('view.renderer');
    return $view->render('auth/login.html.twig');
});

require_once __DIR__ . '/../src/controllers/category-costs.php';

require_once __DIR__ . '/../src/controllers/users.php';

require_once __DIR__ . '/../src/controllers/auth.php';

$app->start();