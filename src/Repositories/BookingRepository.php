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
     * Create Booking Product.
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
                if (isset($bookingItem['slot']['from'], $bookingItem['slot']['to'])) {
                    $from = $bookingItem['slot']['from'];

                    $to = $bookingItem['slot']['to'];
                } else {
                    $timestamps = explode('-', $bookingItem['slot']);

                    $from = $timestamps[0];

                    $to = $timestamps[1];
                }
            } elseif (isset($bookingItem['date_from'], $bookingItem['date_to'])) {
                $from = Carbon::createFromTimeString($bookingItem['date_from'].' 00:00:00')->getTimestamp();

                $to = Carbon::createFromTimeString($bookingItem['date_to'].' 23:59:59')->getTimestamp();
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
     * Get all bookings for the given date and time range.
     *
     * @return mixed
     */
    public function getBookings(array $dateRange)
    {
        return $this->select(
            'bookings.id',
            'bookings.order_id',
            'bookings.from as start',
            'bookings.to as end',
        )
            ->addSelect(
                \DB::raw('CONCAT(orders.customer_first_name, " ", orders.customer_last_name) as full_name')
            )
            ->leftJoin('orders', 'bookings.order_id', '=', 'orders.id')
            ->whereBetween('bookings.from', $dateRange)
            ->distinct()
            ->get();
    }
}
