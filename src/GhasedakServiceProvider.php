<?php

namespace Ghasedak\Laravel;

use Illuminate\Support\ServiceProvider;
use Ghasedak\GhasedakApi;

class GhasedakServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('Laravel' ,function (){
            $apiKey = env('GHASEDAKAPI_KEY', '');
            $url    = env('GHASEDAKAPI_URL', 'http://api.ghasedak.me/v2/');
            return new GhasedakApi($apiKey, $url, 'ghasedakLaravelV21');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
