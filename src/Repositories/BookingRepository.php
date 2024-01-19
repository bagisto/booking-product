<?php

namespace Webkul\BookingProduct\Repositories;

use Carbon\Carbon;
use Illuminate\Support\Facades\Event;
use Webkul\Core\Eloquent\Repository;

class BookingRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Webkul\BookingProduct\Contracts\Booking';
    }

    /**
     * Create Method.
     *
     * @return \Webkul\BookingProduct\Contracts\Booking|void
     */
    public function create(array $data)
    {
        $order = $data['order'];

        foreach ($order->items()->get() as $item) {
            if ($item->type != 'booking') {
                continue;
            }

            Event::dispatch('booking_product.booking.save.before', $item);

            $from = $to = null;

            $bookingItem = $item->additional['booking'];

            if (isset($bookingItem['slot'])) {
                if (is_array($bookingItem['slot'])) {
                    $timestamps = explode('-', $bookingItem['slot']);

                    $from = $bookingItem['slot']['from'] ?? current($timestamps);

                    $to = $bookingItem['slot']['to'] ?? end($timestamps);
                }
            } elseif (isset($bookingItem['date_from']) && isset($bookingItem['date_to'])) {
                $from = Carbon::createFromTimeString($bookingItem['date_from'] . ' 00:00:00')->getTimestamp();

                $to = Carbon::createFromTimeString($bookingItem['date_to'] . ' 23:59:59')->getTimestamp();
            }

            $booking = parent::create([
                'qty'                             => $item->qty_ordered,
                'from'                            => $from,
                'to'                              => $to,
                'order_id'                        => $order->id,
                'order_item_id'                   => $item->id,
                'product_id'                      => $item->product_id,
                'booking_product_event_ticket_id' => $bookingItem['ticket_id'] ?? null,
            ]);

            Event::dispatch('marketplace.booking.save.after', $booking);
        }
    }

    /**
     * @param  string  $dateRange
     * @return mixed
     */
    public function getBookings($dateRange)
    {
        return $this->select(
            'bookings.id',
            'bookings.order_id',
            'order_items.name as title',
            'bookings.from as start',
            'bookings.to as end',
        )
            ->leftJoin('order_items', 'bookings.order_item_id', '=', 'order_items.id')
            ->whereBetween('bookings.from', $dateRange)
            ->distinct()
            ->get();
    }
}
