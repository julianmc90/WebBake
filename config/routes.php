<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'WebBake',
    ['path' => '/web-bake'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
