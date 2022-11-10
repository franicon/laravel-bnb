<?php

namespace Database\Factories;

use App\Models\Bookable;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Bookable>
 */
class BookableFactory extends Factory{

    public function definition(): array {
        return [
            'title' => $this->faker->randomElement(['West Demetris Rooms', 'Villa', 'Villo', ' Valley']),
            'description' => $this->faker->text,
        ];
    }
}
