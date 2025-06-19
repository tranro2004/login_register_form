<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public const HOME = '/'; 
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->mapRoutes();
    }

    /**
     * Define the routes for the application.
     */
    protected function mapRoutes(): void
    {
        // Default web routes
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        // Admin routes
        Route::middleware('web')
            ->prefix('admin')
            ->name('admin.')
            ->group(base_path('routes/admin/web.php'));

        // Client routes (nếu cần)
        Route::middleware('web')
            ->prefix('client')  
            ->name('client.')
            ->group(base_path('routes/client/web.php'));

        // API routes
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));
    }
}
