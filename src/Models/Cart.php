<?php

namespace Webkul\BookingProduct\Models;

use Webkul\Checkout\Models\Cart as BaseCart;

class Cart extends BaseCart
{
    /**
     * Checks if cart have stockable items.
     */
    public function haveStockableItems(): bool
    {
        return true;
    }
}