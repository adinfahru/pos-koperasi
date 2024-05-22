<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use App\Models\Products;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('user', function (User $user) {
            return $user->role === 'user';
        });
        

        Gate::define('manager', function (User $user) {
            return $user->role === 'manager';
        });
        
        // Share low stock products data with all views
        View::composer('*', function ($view) {
            $threshold = 10;
            $lowStockProducts = Products::where('stock', '<', $threshold)->get();
            $view->with('lowStockProducts', $lowStockProducts);
        });
    }
}
