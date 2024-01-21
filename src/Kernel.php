<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureRoutes(RoutingConfigurator $routingConfigurator): void
    {
        $extensions = '{php,xml,yaml}';

        $routingConfigurator->import('../config/{routes}' . $this->environment . '/*.' . $extensions);
        $routingConfigurator->import('../config/{routes}/*.' . $extensions);
        $routingConfigurator->import('../config/{routes}.' . $extensions);
    }
}
