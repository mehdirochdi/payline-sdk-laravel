<?php

namespace Rochdi\Payline;

use Illuminate\Support\ServiceProvider;

class PaylineServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //loading the routes file
        //require __DIR__.'/Http/routes.php';
        require __DIR__.'/Lib/paylineSDK.php';
        require_once __DIR__.'/Lib/lib_debug.php';

        //define payline-sdk which are going to be published.
        $this->publishes([
            __DIR__.'/config/payline.php' => base_path('config/payline.php')
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('payline', function($app){
            return new Payline;
        });
    }
}
