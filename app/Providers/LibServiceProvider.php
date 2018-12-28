<?php

namespace App\Providers;

use App\Lib\TestLib;
use Illuminate\Support\ServiceProvider;

class LibServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        app()->singleton('testlib',function(){
            return  new TestLib();
        });

    }
}
