<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bookable;
use App\Models\Booking;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        Bookable::factory(5)->create();
        Bookable::all()->each(function (Bookable $bookable){
            $booking = Booking::factory(Booking::class)->make();
            $bookings = collect([$booking]);

            for ($i = 0; $i < random_int(1, 20); $i++){
                $from = (clone $booking->to)->addDays(random_int(1, 14));
                $to = (clone $from)->addDays(random_int(0, 14));

                $booking = Booking::make([
                    'from' => $from,
                    'to' => $to
                ]);
                $bookings->push($booking);
            }

            $bookable->bookings()->saveMany($bookings);
        });
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
