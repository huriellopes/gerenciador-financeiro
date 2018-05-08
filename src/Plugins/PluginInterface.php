<?php

namespace GERENFin\Plugins;

use GERENFin\ServiceContainerInterface;

interface PluginInterface
{

    public function register(ServiceContainerInterface $container);

}