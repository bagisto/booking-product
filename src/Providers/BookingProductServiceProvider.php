<?php

namespace Webkul\BookingProduct\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Webkul\Admin\DataGrids\Catalog\ProductDataGrid as baseProductDataGrid;
use Webkul\BookingProduct\Console\Commands\Booking as BookingCommand;
use Webkul\BookingProduct\DataGrids\Admin\Catalog\ProductDataGrid;
use Webkul\BookingProduct\Models\Cart;
use Webkul\Checkout\Models\Cart as BaseCart;

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

        $this->app->bind(baseProductDataGrid::class, ProductDataGrid::class);

        $this->app->bind(BaseCart::class, Cart::class);

        $this->app->register(EventServiceProvider::class);

        $this->app->register(ModuleServiceProvider::class);

        $this->publishAssets();
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->registerCommands();

        $this->mergeConfigFrom(
            dirname(__DIR__).'/Config/product_types.php',
            'product_types'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__).'/Config/menu.php',
            'menu.admin'
        );
    }

    /**
     * Register the Booking Product Command of this package.
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                BookingCommand::class,
            ]);
        }
    }

    /**
     * publishing Assets.
     */
    protected function publishAssets(): void
    {
        $this->publishes([
            __DIR__.'/../../publishable/build' => public_path('themes/booking/build'),
        ], 'public');
    }
}
