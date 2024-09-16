<?php

namespace Webkul\BookingProduct\Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Webkul\BookingProduct\Models\BookingProduct;
use Webkul\Product\Models\Product;

class BookingProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected string $model = BookingProduct::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $bookingTypes = ['event'];

        return [
            'type'           => $bookingTypes[array_rand(['event'])],
            'qty'            => $this->faker->randomNumber(2),
            'available_from' => Carbon::yesterday(),
            'available_to'   => Carbon::tomorrow(),
            'product_id'     => Product::factory(['type' => 'booking']),
        ];
    }
}
