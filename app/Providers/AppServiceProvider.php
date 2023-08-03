<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        
        Blade::if('admin', function () {            
            if ( auth()->user()->role == 1) {
                return 1;
            }
            return 0;
        });

        Blade::if('client', function () {            
            if ( auth()->user()->role == 2) {
                return 1;
            }
            return 0;
        });

        Blade::if('shipper', function () {            
            if ( auth()->user()->role == 3) {
                return 1;
            }
            return 0;
        });

        Blade::if('shipperandadmin', function () {            
            if ( auth()->user()->role == 1 || auth()->user()->role == 3 ) {
                return 1;
            }
            return 0;
        });
 Blade::if('clientandadmin', function () {            
            if ( auth()->user()->role == 2 || auth()->user()->role == 1 ) {
                return 1;
            }
            return 0;
        });
    }
}
