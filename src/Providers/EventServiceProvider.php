<?php

namespace Webkul\BookingProduct\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;
use Webkul\Theme\ViewRenderEventManager;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'checkout.order.save.after' => [
            'Webkul\BookingProduct\Listeners\Order@afterPlaceOrder',
        ],
    ];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        /**
         * Styles loading.
         */
        Event::listen('bagisto.admin.layout.head', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('booking::components.layouts.style');
        });

        Event::listen('bagisto.admin.catalog.product.edit.form.videos.after', static function (ViewRenderEventManager $viewRenderEventManager) {
            if (View::exists('booking::admin.catalog.products.edit.types.booking')) {
                $viewRenderEventManager->addTemplate('booking::admin.catalog.products.edit.types.booking');
            }
        });

        // Marketplace event for adding booking type
        Event::listen('marketplace.seller.account.products.edit.videos.after', static function (ViewRenderEventManager $viewRenderEventManager) {
            if (View::exists('booking::mp-seller.catalog.products.edit.types.booking')) {
                $viewRenderEventManager->addTemplate('booking::mp-seller.catalog.products.edit.types.booking');
            }
        });

        Event::listen('bagisto.shop.products.short_description.after', static function (ViewRenderEventManager $viewRenderEventManager) {
            if (View::exists('booking::shop.products.view.types.booking')) {
                $viewRenderEventManager->addTemplate('booking::shop.products.view.types.booking');
            }
        });

        Event::listen('bagisto.admin.catalog.product.edit.form.inventories.controls.before', static function (ViewRenderEventManager $viewRenderEventManager) {
            if (View::exists('booking::admin.catalog.products.edit.inventories')) {
                $viewRenderEventManager->addTemplate('booking::admin.catalog.products.edit.inventories');
            }
        });
    }
}
