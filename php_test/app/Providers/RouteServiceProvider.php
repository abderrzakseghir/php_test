<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * Namespace pour les contrôleurs.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Enregistrer les services de l'application.
     *
     * @return void
     */
    public function register()
    {
        // Vous pouvez enregistrer des services ici si nécessaire
    }

    /**
     * Bootstrap les services de l'application.
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
     * Configurer les limitations de taux pour l'application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        // Vous pouvez configurer les limitations de taux ici si nécessaire
    }
}
