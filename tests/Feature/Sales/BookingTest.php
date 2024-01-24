<?php

use Webkul\Checkout\Models\Cart;
use Webkul\Checkout\Models\CartItem;
use Webkul\Sales\Models\Order;
use Webkul\Sales\Models\OrderAddress;
use Webkul\Sales\Models\OrderPayment;

use function Pest\Laravel\get;

afterEach(function () {
    // Cleaning up the row  which are creating
    OrderAddress::query()->delete();
    Order::query()->delete();
    OrderPayment::query()->delete();
    CartItem::query()->delete();
    Cart::query()->delete();
});

it('should returns the booking index page', function () {
    // Act and Assert
    $this->loginAsAdmin();

    get(route('admin.sales.bookings.index'))
        ->assertOk()
        ->assertSeeText(trans('booking::app.admin.sales.bookings.index.title'));
});
