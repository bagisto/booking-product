<?php

namespace Webkul\BookingProduct\Repositories;

use Carbon\Carbon;
use Illuminate\Container\Container;
use Webkul\Core\Eloquent\Repository;

class BookingProductRepository extends Repository
{
    /**
     * @return array
     */
    protected $typeRepositories = [];

    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected BookingProductDefaultSlotRepository $bookingProductDefaultSlotRepository,
        protected BookingProductAppointmentSlotRepository $bookingProductAppointmentSlotRepository,
        protected BookingProductEventTicketRepository $bookingProductEventTicketRepository,
        protected BookingProductRentalSlotRepository $bookingProductRentalSlotRepository,
        protected BookingProductTableSlotRepository $bookingProductTableSlotRepository,
        Container $container
    ) {
        parent::__construct($container);

        $this->typeRepositories = [
            'default'     => $bookingProductDefaultSlotRepository,
            'appointment' => $bookingProductAppointmentSlotRepository,
            'event'       => $bookingProductEventTicketRepository,
            'rental'      => $bookingProductRentalSlotRepository,
            'table'       => $bookingProductTableSlotRepository,
        ];
    }

    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Webkul\BookingProduct\Contracts\BookingProduct';
    }

    /**
     * @return \Webkul\BookingProduct\Contracts\BookingProduct
     */
    public function create(array $data)
    {
        $bookingProduct = parent::create($data);

        if ($bookingProduct->type == 'event') {
            $this->typeRepositories[$data['type']]->saveEventTickets($data, $bookingProduct);
        } else {
            $this->typeRepositories[$data['type']]->create(array_merge($data, ['booking_product_id' => $bookingProduct->id]));
        }

        return $bookingProduct;
    }

    /**
     * Update method.
     *
     * @param  int  $id
     * @param  string  $attribute
     * @return \Webkul\BookingProduct\Contracts\BookingProduct|void
     */
    public function update(array $data, $id, $attribute = 'id')
    {
        $bookingProduct = parent::update($data, $id, $attribute);

        foreach ($this->typeRepositories as $type => $repository) {
            if ($type == $data['type']) {
                continue;
            }

            $repository->deleteWhere(['booking_product_id' => $id]);
        }

        if ($bookingProduct->type == 'event') {
            $this->typeRepositories[$data['type']]->saveEventTickets($data, $bookingProduct);
        } else {
            $bookingProductTypeSlot = $this->typeRepositories[$data['type']]->findOneByField('booking_product_id', $id);

            if (isset($data['slots'])) {
                $data['slots'] = $this->formatSlots($data);

                $data['slots'] = $this->validateSlots($data);
            } else {
                $data['slots'] = $this->addSlots($data);
            }

            if (! $bookingProductTypeSlot) {
                $this->typeRepositories[$data['type']]->create(array_merge($data, ['booking_product_id' => $id]));
            } else {
                $this->typeRepositories[$data['type']]->update($data, $bookingProductTypeSlot->id);
            }
        }
    }

    /**
     * Format Slots data.
     */
    public function formatSlots(array $data): array
    {
        if (
            isset($data['same_slot_all_days'])
            && ! $data['same_slot_all_days']
        ) {
            for ($i = 0; $i < 7; $i++) {
                if (! isset($data['slots'][$i])) {
                    $data['slots'][$i] = [];
                } else {
                    $count = 0;

                    $slots = [];

                    foreach ($data['slots'][$i] as $slot) {
                        $slots[] = array_merge($slot, ['id' => $i.'_slot_'.$count]);

                        $count++;
                    }

                    $data['slots'][$i] = $slots;
                }
            }

            ksort($data['slots']);
        }

        return $data['slots'];
    }

    /**
     * Add blank array where slots key in available.
     */
    public function addSlots(array $data): array
    {
        if (isset($data['same_slot_all_days']) && ! $data['same_slot_all_days']) {
            return [[], [], [], [], [], [], []];
        } else {
            return (
                $data['type'] == 'default'
                && $data['booking_type'] == 'many'
            )
                ? [[], [], [], [], [], [], []]
                : [];
        }
    }

    /**
     * Validate Slots data.
     */
    public function validateSlots(array $data): array
    {
        if (! isset($data['same_slot_all_days'])) {
            return $data['slots'];
        }

        if (! $data['same_slot_all_days']) {
            foreach ($data['slots'] as $day => $slots) {
                $data['slots'][$day] = $this->skipOverLappingSlots($slots);
            }
        } else {
            $data['slots'] = $this->skipOverLappingSlots($data['slots']);
        }

        return $data['slots'];
    }

    /**
     * @param  array  $data
     * @return array
     */
    public function skipOverLappingSlots($slots)
    {
        $tempSlots = [];

        foreach ($slots as $key => $timeInterval) {
            $from = Carbon::createFromTimeString($timeInterval['from'])->getTimestamp();

            $to = Carbon::createFromTimeString($timeInterval['to'])->getTimestamp();

            if ($from > $to) {
                unset($slots[$key]);

                continue;
            }

            $isOverLapping = false;

            foreach ($tempSlots as $slot) {
                if (
                    (
                        $slot['from'] <= $from
                        && $slot['to'] >= $from
                    )
                    || (
                        $slot['from'] <= $to
                        && $slot['to'] >= $to
                    )
                ) {
                    $isOverLapping = true;

                    unset($slots[$key]);
                }
            }

            if (! $isOverLapping) {
                $tempSlots[] = [
                    'from' => $from,
                    'to'   => $to,
                ];
            }
        }

        return $slots;
    }
}
