<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapDonorRoutes();

        $this->mapHostaffRoutes();

        $this->mapCostaffRoutes();

        $this->mapMestaffRoutes();

        $this->mapAdminRoutes();

    }

 

    /**
     * Define the "admin" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::group([
            'middleware' => ['web', 'admin', 'auth:admin'],
            'prefix' => 'admin',
            'as' => 'admin.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/admin.php');
        });
    }

    /**
     * Define the "mestaff" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapMestaffRoutes()
    {
        Route::group([
            'middleware' => ['web', 'mestaff', 'auth:mestaff'],
            'prefix' => 'mestaff',
            'as' => 'mestaff.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/mestaff.php');
        });
    }

    /**
     * Define the "costaff" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapCostaffRoutes()
    {
        Route::group([
            'middleware' => ['web', 'costaff', 'auth:costaff'],
            'prefix' => 'costaff',
            'as' => 'costaff.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/costaff.php');
        });
    }

    /**
     * Define the "hostaff" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapHostaffRoutes()
    {
        Route::group([
            'middleware' => ['web', 'hostaff', 'auth:hostaff'],
            'prefix' => 'hostaff',
            'as' => 'hostaff.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/hostaff.php');
        });
    }

    /**
     * Define the "donor" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapDonorRoutes()
    {
        Route::group([
            'middleware' => ['web', 'donor', 'auth:donor'],
            'prefix' => 'donor',
            'as' => 'donor.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/donor.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
