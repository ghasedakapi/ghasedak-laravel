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
            return new GhasedakApi();
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
