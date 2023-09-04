<?php

namespace bdroppySunglasses\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class bdroppySunglassesRouteServiceProvider
 * @package bdroppySunglasses\Providers
 */
class bdroppySunglassesRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        /*$router->get('hello-world','bdroppySunglasses\Controllers\bdroppySunglassesController@getHelloWorldPage');*/
        $router->get('bdroppySunglasses', 'TopItems\Controllers\bdroppySunglassesController@getHelloWorldPage');
    }
}