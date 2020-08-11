<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Libraries\Modular;

class ModularServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('modular', function () {
            return new Modular();
        })
    ;}

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
