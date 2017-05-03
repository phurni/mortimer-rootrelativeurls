<?php namespace Mortimer\Rootrelativeurls;

use Illuminate\Support\ServiceProvider;

class RootrelativeurlsServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App::bind('url', function() {
            return new RootrelativeUrlGenerator(
                \App::make('router')->getRoutes(),
                \App::make('request')
            );
        });
    }
}