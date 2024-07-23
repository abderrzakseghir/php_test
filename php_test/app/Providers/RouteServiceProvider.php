<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class RouteServiceProvider extends ServiceProvider
{
    /**
      
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
      
     *
     * @return void
     */
    public function register()
    {
         
    }

    /**
      
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            // Charger les routes API
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            
        });
    }

    /**
      
     * @return void
     */
    protected function configureRateLimiting()
    {
       
    }
}
