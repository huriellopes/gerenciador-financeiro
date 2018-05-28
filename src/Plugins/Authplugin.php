<?php
declare(strict_types=1);

namespace GERENFin\Plugins;

use GERENFin\Auth\Auth;
use GERENFin\Auth\JasnyAuth;
use GERENFin\ServiceContainerInterface;
use Interop\Container\ContainerInterface;

class Authplugin implements PluginInterface
{

    public function register(ServiceContainerInterface $container)
    {
        $container->addLazy('jasny.auth', function (ContainerInterface $container) {
            return new JasnyAuth($container->get('user.repository'));
        });
        $container->addLazy('auth', function (ContainerInterface $container) {
            return new Auth($container->get('jasny.auth'));
        });
    }
}