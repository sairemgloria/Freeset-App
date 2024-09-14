<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        // User Components
        Blade::component('components.header', 'user-header');
        Blade::component('components.navbar', 'user-navbar');
        Blade::component('components.nav-link', 'user-nav-link');
        Blade::component('components.footer', 'user-footer');

        // Admin Components
        Blade::component('admin.components.admin-header', 'admin-header');
        Blade::component('admin.components.admin-navbar', 'admin-navbar');
        Blade::component('admin.components.admin-nav-link', 'admin-nav-link');
        Blade::component('admin.components.admin-footer', 'admin-footer');
    }
}
