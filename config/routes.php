<?php

use App\Controller\PhpController;
use App\Controller\PhpInvokableRouteController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
    $routes->add('route_php', '/php')
        // the controller value has the format [controller_class, method_name]
        ->controller([PhpController::class, 'testPhpRoute'])
        // if the action is implemented as the __invoke() method of the
        // controller class, you can skip the 'method_name' part:
        // ->controller(BlogController::class)
    ;

    $routes->add('route_invoke', '/php-invoke')
        ->controller(PhpInvokableRouteController::class);
};