<?php

namespace Webkul\BookingProduct\Helpers;

use Carbon\Carbon;

class DefaultSlot extends Booking
{
    /**
     * @return array
     */
    protected $daysOfWeek = [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
    ];

    /**
     * Returns slots for a particular day
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

        $currentTime = Carbon::now();

        $availableFrom = Carbon::createFromTimeString($currentTime->format('Y-m-d 00:00:00'));

        $availableTo = Carbon::createFromTimeString('2080-01-01 00:00:00');

        if (! $bookingProduct->available_every_week && $bookingProduct->available_from) {
            $availableFrom = Carbon::createFromTimeString($bookingProduct->available_from);

            $availableTo = Carbon::createFromTimeString($bookingProduct->available_to);
        }

        if (
            $requestedDate < $availableFrom
            || $requestedDate > $availableTo
        ) {
            return [];
        }

        return $bookingProductSlot->booking_type == 'one'
            ? $this->getOneBookingForManyDaysSlots($bookingProductSlot, $requestedDate)
            : $this->getManyBookingsForOneDaySlots($bookingProductSlot, $requestedDate);
    }

    /**
     * Returns slots for One Booking For Many Days
     *
     * @param  \Webkul\BookingProduct\Contracts\BookingProductTableSlot  $bookingProductSlot
     * @return array
     */
    public function getOneBookingForManyDaysSlots($bookingProductSlot, object $requestedDate)
    {
        $slots = [];

        foreach ($bookingProductSlot->slots as $key => $timeDuration) {
            if ($requestedDate->dayOfWeek != $timeDuration['from_day']) {
                continue;
            }

            $startDate = clone $requestedDate->modify('this '.$this->daysOfWeek[$timeDuration['from_day']]);

            $endDate = clone $requestedDate->modify('this '.$this->daysOfWeek[$timeDuration['to_day']]);

            $startDate = Carbon::createFromTimeString($startDate->format('Y-m-d').' '.$timeDuration['from'].':00');

            $endDate = Carbon::createFromTimeString($endDate->format('Y-m-d').' '.$timeDuration['to'].':00');

            $slots[] = [
                'from'      => $startDate->format('h:i A'),
                'to'        => $endDate->format('h:i A'),
                'timestamp' => $startDate->getTimestamp().'-'.$endDate->getTimestamp(),
            ];
        }

        return $slots;
    }

    /**
     * Returns slots for Many Bookings for One Day
     *
     * @param  \Webkul\BookingProduct\Contracts\BookingProductTableSlot  $bookingProductSlot
     * @return array
     */
    public function getManyBookingsForOneDaySlots($bookingProductSlot, object $requestedDate)
    {
        $bookingProduct = $bookingProductSlot->booking_product;

        $currentTime = Carbon::now();

        $availableFrom = $bookingProduct->available_from
            ? Carbon::createFromTimeString($bookingProduct->available_from)
            : Carbon::createFromTimeString($currentTime->format('Y-m-d 00:00:00'));

        $availableTo = $bookingProduct->available_to
            ? Carbon::createFromTimeString($bookingProduct->available_to)
            : Carbon::createFromTimeString('2080-01-01 00:00:00');

        $timeDurations = $bookingProductSlot->slots[$requestedDate->format('w')] ?? [];

        if (
            $requestedDate < $availableFrom
            || $requestedDate > $availableTo
        ) {
            return [];
        }

        $slots = [];

        foreach ($timeDurations as $timeDuration) {
            $fromChunks = explode(':', $timeDuration['from']);
            $toChunks = explode(':', $timeDuration['to']);

            $startDayTime = Carbon::createFromTimeString($requestedDate->format('Y-m-d').' 00:00:00')
                ->addMinutes(($fromChunks[0] * 60) + $fromChunks[1]);

            $tempStartDayTime = clone $startDayTime;

            $endDayTime = Carbon::createFromTimeString($requestedDate->format('Y-m-d').' 00:00:00')
                ->addMinutes(($toChunks[0] * 60) + $toChunks[1]);

            $isFirstIteration = true;

            while (1) {
                $from = clone $tempStartDayTime;

                $tempStartDayTime->addMinutes($bookingProductSlot->duration);

                if ($isFirstIteration) {
                    $isFirstIteration = false;
                } else {
                    $from->modify('+'.$bookingProductSlot->break_time.' minutes');

                    $tempStartDayTime->modify('+'.$bookingProductSlot->break_time.' minutes');
                }

                $to = clone $tempStartDayTime;

                if (
                    ($startDayTime <= $from
                        && $from <= $availableTo
                    )
                    && (
                        $availableTo >= $to
                        && $to >= $startDayTime
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
                    // Get already ordered qty for this slot
                    $orderedQty = 0;

                    $qty = isset($timeDuration['qty']) ? ($timeDuration['qty'] - $orderedQty) : 1;

                    if (
                        $qty = $timeDuration['qty'] ?? 1
                        && $currentTime <= $from
                    ) {
                        $slots[] = [
                            'from'      => $from->format('h:i A'),
                            'to'        => $to->format('h:i A'),
                            'timestamp' => $from->getTimestamp().'-'.$to->getTimestamp(),
                            'qty'       => $qty,
                        ];
                    }
                } else {
                    break;
                }
            }
        }

        return $slots;
    }
}
