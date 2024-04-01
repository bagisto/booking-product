<?php

namespace Webkul\BookingProduct\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BookingProductServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');

        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'booking');

        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'booking');

        Blade::anonymousComponentPath(__DIR__.'/../Resources/views/components', 'booking');

        $this->publishes([
            __DIR__.'/../../publishable/build' => public_path('themes/booking/build'),
        ], 'public');

        $this->app->register(EventServiceProvider::class);

        $this->app->register(ModuleServiceProvider::class);
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/Config/product_types.php', 'product_types');

        $this->mergeConfigFrom(
            dirname(__DIR__).'/Config/menu.php', 'menu.admin'
        );
    }
}
