<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            ['bike_id'=>2, 'station_id'=>null, 'rating'=>3, 'comment'=>'Xe tạm được','user_id'=>2],
            ['bike_id'=>2, 'station_id'=>1, 'rating'=>3, 'comment'=>'Trạm nhỏ quá','user_id'=>2],
            ['bike_id'=>2, 'station_id'=>null, 'rating'=>4, 'comment'=>'Xe cũng được','user_id'=>2],
            ['bike_id'=>null, 'station_id'=>1, 'rating'=>5, 'comment'=>'Trạm tốt','user_id'=>5],
            ['bike_id'=>4, 'station_id'=>null, 'rating'=>3, 'comment'=>'Xe khá nặng','user_id'=>4],
            ['bike_id'=>null, 'station_id'=>2, 'rating'=>1, 'comment'=>'Trạm dơ quá','user_id'=>3],
            ['bike_id'=>2, 'station_id'=>null, 'rating'=>3, 'comment'=>'Xe xấu quá','user_id'=>5],
            ['bike_id'=>null, 'station_id'=>3, 'rating'=>3, 'comment'=>'Xe tạm được','user_id'=>2],
            ['bike_id'=>3, 'station_id'=>null, 'rating'=>1, 'comment'=>'Xe tệ','user_id'=>3],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}