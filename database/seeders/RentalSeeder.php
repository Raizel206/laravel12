<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rental;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rentals = [
            [
                'user_id' => 2, 
                'bike_id' => 2,
                'start_station_id' => 2,
                'star_time' => now(), // Dùng star_time theo Model Rental của bạn
                'status' => 'ongoing'
            ],
            [
                'user_id' => 3, 
                'bike_id' => 3,
                'start_station_id' => 3,
                'star_time' => now(),
                'status' => 'ongoing'
            ],
        ];

        foreach ($rentals as $rental) {
            Rental::create($rental);
        }
    }
}