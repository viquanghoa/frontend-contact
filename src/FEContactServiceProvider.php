<?php

namespace YourVendorName\PackageName;

use Illuminate\Support\ServiceProvider;

class FEContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap bất kỳ service nào của package.
     */
    public function boot()
    {
        // Đăng ký config của package
        $this->publishes([
            __DIR__ . '/config/hoavq.php' => config_path('hoavq.php'),
        ], 'config');

        // Đăng ký publish controller
        $this->publishes([
            __DIR__ . '/Http/Controllers/ContactController.php' => app_path('Http/Controllers/ContactController.php'),
        ], 'controllers');

        // Đăng ký publish routes
        $this->publishes([
            __DIR__ . '/routes/web.php' => base_path('routes/frontend-contact-routes.php'),
        ], 'routes');

        if (file_exists(base_path('routes/frontend-contact-routes.php'))) {
            $this->loadRoutesFrom(base_path('routes/frontend-contact-routes.php'));
        } else {
            $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        }

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'frontend-contact');

        // $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // $this->publishes([
        //     __DIR__ . '/config/package.php' => config_path('package.php'),
        // ]);
    }

    /**
     * Đăng ký bất kỳ service nào của package.
     */
    public function register()
    {
        // Đăng ký binding vào service container.
    }
}
