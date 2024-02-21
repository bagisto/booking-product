<?php

namespace Webkul\BookingProduct\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Webkul\Product\DataTypes\CartItemValidationResult;

class RentalSlot extends Booking
{
    /**
     * Returns slots for a particular day.
     *
     * @param  \Webkul\BookingProduct\Contracts\BookingProduct  $bookingProduct
     */
    public function getSlotsByDate($bookingProduct, string $date): array
    {
        $bookingProductSlot = $this->typeRepositories[$bookingProduct->type]->findOneByField('booking_product_id', $bookingProduct->id);

        if (empty($bookingProductSlot->slots)) {
            return [];
        }

        $requestedDate = Carbon::createFromTimeString($date.' 00:00:00');

        $availableFrom = Carbon::createFromTimeString(Carbon::now()->format('Y-m-d 00:00:00'));

        $availableTo = Carbon::createFromTimeString('2080-01-01 00:00:00');

        if (! $bookingProduct->available_every_week && $bookingProduct->available_from) {
            $availableFrom = Carbon::createFromTimeString($bookingProduct->available_from);

            $availableTo = Carbon::createFromTimeString($bookingProduct->available_to);
        }

        $timeDurations = $bookingProductSlot->same_slot_all_days
            ? $bookingProductSlot->slots
            : $bookingProductSlot->slots[$requestedDate->format('w')] ?? [];

        if (
            $requestedDate < $availableFrom
            || $requestedDate > $availableTo
        ) {
            return [];
        }

        $slots = [];

        foreach ($timeDurations as $index => $timeDuration) {
            $fromChunks = explode(':', $timeDuration['from']);
            $toChunks = explode(':', $timeDuration['to']);

            $startDayTime = Carbon::createFromTimeString($requestedDate->format('Y-m-d').' 00:00:00')
                ->addMinutes(($fromChunks[0] * 60) + $fromChunks[1]);

            $endDayTime = Carbon::createFromTimeString($requestedDate->format('Y-m-d').' 00:00:00')
                ->addMinutes(($toChunks[0] * 60) + $toChunks[1]);

            $from = clone $startDayTime;

            $to = clone $endDayTime;

            if (
                (
                    $availableFrom <= $from
                    && $from <= $availableTo
                )
                && (
                    $availableTo >= $to
                    && $to >= $availableFrom
                )
                && (
                    $startDayTime <= $from
                    && $from <= $endDayTime
                )
                && (
                    $endDayTime >= $to
                    && $to >= $startDayTime
                )
            ) {
                if (
                    $qty = $timeDuration['qty'] ?? 1
                    && Carbon::now() <= $from
                ) {
                    if (! isset($slots[$index])) {
                        $slots[$index]['time'] = $startDayTime->format('h:i A').' - '.$endDayTime->format('h:i A');
                    }

                    $slots[$index]['slots'][] = [
                        'from'           => $from->format('h:i A'),
                        'to'             => $to->format('h:i A'),
                        'from_timestamp' => $from->getTimestamp(),
                        'to_timestamp'   => $to->getTimestamp(),
                        'qty'            => $qty,
                    ];
                }
            }
        }

        return $slots;
    }

    /**
     * Returns get booked quantity.
     *
     * @param  array  $data
     */
    public function getBookedQuantity($data): int
    {
        $bookingProduct = $this->bookingProductRepository->findOneByField('product_id', $data['product_id']);

        $rentingType = $data['additional']['booking']['renting_type'] ?? $bookingProduct->rental_slot->renting_type;

        if ($rentingType == 'daily') {
            $from = Carbon::createFromTimeString($data['additional']['booking']['date_from'].' 00:00:01')->getTimestamp();

            $to = Carbon::createFromTimeString($data['additional']['booking']['date_to'].' 23:59:59')->getTimestamp();
        } else {
            $from = Carbon::createFromTimestamp($data['additional']['booking']['slot']['from'])->getTimestamp();

            $to = Carbon::createFromTimestamp($data['additional']['booking']['slot']['to'])->getTimestamp();
        }

        $result = $this->bookingRepository->getModel()
            ->leftJoin('order_items', 'bookings.order_item_id', '=', 'order_items.id')
            ->addSelect(DB::raw('SUM(qty_ordered - qty_canceled - qty_refunded) as total_qty_booked'))
            ->where('bookings.product_id', $data['product_id'])
            ->where(function ($query) use ($from, $to) {
                $query->whereBetween('bookings.from', [$from, $to])
                    ->orWhereBetween('bookings.to', [$from, $to]);
            })
            ->first();

        return $result->total_qty_booked ?? 0;
    }

    /**
     * Returns slots that are going to expire.
     *
     * @param  \Webkul\Checkout\Contracts\CartItem  $cartItem
     */
    public function isSlotExpired($cartItem): bool
    {
        $bookingProduct = $this->bookingProductRepository->findOneByField('product_id', $cartItem['product_id']);

        if (isset($cartItem['additional']['booking']['date'])) {
            $timeIntervals = $this->getSlotsByDate($bookingProduct, $cartItem['additional']['booking']['date']);

            foreach ($timeIntervals as $timeInterval) {
                foreach ($timeInterval['slots'] as $slot) {
                    if (
                        $slot['from_timestamp'] == $cartItem['additional']['booking']['slot']['from']
                        && $slot['to_timestamp'] == $cartItem['additional']['booking']['slot']['to']
                    ) {
                        return false;
                    }
                }
            }

            return true;
        } else {
            $currentTime = Carbon::now();

            $requestedFromDate = Carbon::createFromTimeString($cartItem['additional']['booking']['date_from'].' 00:00:00');

            $requestedToDate = Carbon::createFromTimeString($cartItem['additional']['booking']['date_to'].' 23:59:59');

            $availableFrom = ! $bookingProduct->available_every_week && $bookingProduct->available_from
                ? Carbon::createFromTimeString($bookingProduct->available_from->format('Y-m-d').' 00:00:00')
                : Carbon::createFromTimeString($currentTime->format('Y-m-d 00:00:00'));

            $availableTo = ! $bookingProduct->available_every_week && $bookingProduct->available_from
                ? Carbon::createFromTimeString($bookingProduct->available_to->format('Y-m-d').' 23:59:59')
                : Carbon::createFromTimeString('2080-01-01 00:00:00');

            return
                $requestedFromDate < $availableFrom
                || $requestedFromDate > $availableTo
                || $requestedToDate < $availableFrom
                || $requestedToDate > $availableTo;
        }
    }

    /**
     * Add booking additional prices to cart item.
     */
    public function addAdditionalPrices(array $products): array
    {
        $bookingProduct = $this->bookingProductRepository->findOneByField('product_id', $products[0]['product_id']);

        $rentingType = $products[0]['additional']['booking']['renting_type'] ?? $bookingProduct->rental_slot->renting_type;

        if ($rentingType == 'daily') {
            $from = Carbon::createFromTimeString($products[0]['additional']['booking']['date_from'].' 00:00:00');
            $to = Carbon::createFromTimeString($products[0]['additional']['booking']['date_to'].' 24:00:00');

            $price = $bookingProduct->rental_slot->daily_price * $to->diffInDays($from);
        } else {
            $from = Carbon::createFromTimestamp($products[0]['additional']['booking']['slot']['from']);
            $to = Carbon::createFromTimestamp($products[0]['additional']['booking']['slot']['to']);

            $price = $bookingProduct->rental_slot->hourly_price * $to->diffInHours($from);
        }

        $price = core()->convertPrice($price);

        $quantity = $products[0]['quantity'];

        $products[0]['price'] += $price;
        $products[0]['base_price'] += $price;
        $products[0]['total'] += ($price * $quantity);
        $products[0]['base_total'] += ($price * $quantity);

        return $products;
    }

    /**
     * Validate cart item product price.
     *
     * @param  \Webkul\Checkout\Models\CartItem  $item
     */
    public function validateCartItem($item): CartItemValidationResult
    {
        $result = new CartItemValidationResult();

        if (parent::isCartItemInactive($item)) {
            $result->itemIsInactive();

            return $result;
        }

        $price = $item->product->getTypeInstance()->getFinalPrice($item->quantity);

        $bookingProduct = $this->bookingProductRepository->findOneByField('product_id', $item->product_id);

        $bookingInfo = $item->additional['booking'] ?? null;

        $rentingType = $bookingInfo['renting_type'] ?? $bookingProduct->rental_slot->renting_type;

        if ($rentingType == 'daily') {
            if (
                ! isset($bookingInfo['date_from'])
                || ! isset($bookingInfo['date_to'])
            ) {
                $result->itemIsInactive();

                return $result;
            }

            $from = Carbon::createFromTimeString($bookingInfo['date_from'].' 00:00:00');
            $to = Carbon::createFromTimeString($bookingInfo['date_to'].' 24:00:00');

            $price += $bookingProduct->rental_slot->daily_price * $to->diffInDays($from);
        } else {
            if (
                ! isset($item->additional['booking']['slot']['from'])
                || ! isset($item->additional['booking']['slot']['to'])
            ) {
                $result->itemIsInactive();

                return $result;
            }

            $from = Carbon::createFromTimestamp($item->additional['booking']['slot']['from']);
            $to = Carbon::createFromTimestamp($item->additional['booking']['slot']['to']);

            $price += $bookingProduct->rental_slot->hourly_price * $to->diffInHours($from);
        }

        if ($price == $item->base_price) {
            return $result;
        }

        $item->base_price = $price;
        $item->price = core()->convertPrice($price);

        $item->base_total = $price * $item->quantity;
        $item->total = core()->convertPrice($price * $item->quantity);

        $item->save();

        return $result;
    }
}
