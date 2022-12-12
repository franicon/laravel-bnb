<?php

namespace Database\Factories;

use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory {

    /**
     * @throws Exception
     */
    public function definition(): array {
        $from = Carbon::instance( $this->faker->dateTimeBetween('-1 months', '+1 months'));
            $to = (clone $from)->addDays(random_int(0, 14));
        return [
            'from' => $from,
            'to' => $to
        ];
    }
}
