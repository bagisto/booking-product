<?php

namespace Webkul\BookingProduct\Helpers;

class TableSlot extends Booking
{
    /**
     * Return the item if it has a quantity.
     *
     * @param  \Webkul\Checkout\Contracts\CartItem  $cartItem
     */
    public function isItemHaveQuantity($cartItem): bool
    {
        $bookingProduct = $this->bookingProductRepository->findOneByField('product_id', $cartItem['product_id']);

        $bookedQty = $this->getBookedQuantity($cartItem);

        $tableSlot = $bookingProduct->table_slot;

        $requestedQty = $cartItem['quantity'];

        if ($tableSlot->price_type == 'table') {
            $requestedQty *= $tableSlot->guest_limit;
            $bookedQty *= $tableSlot->guest_limit;
        }

        if (
            $bookingProduct->qty - $bookedQty < $requestedQty
            || $this->isSlotExpired($cartItem)
        ) {
            return false;
        }

        return true;
    }
}
