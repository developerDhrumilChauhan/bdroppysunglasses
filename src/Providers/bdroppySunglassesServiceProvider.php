<?php

namespace bdroppySunglasses\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class bdroppySunglassesServiceProvider
 * @package bdroppySunglasses\Providers
 */
class bdroppySunglassesServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(bdroppySunglassesRouteServiceProvider::class);
    }
}