<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bike;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bikes1 = [
            ['code'=>'01_100','name'=>'TDM - xe đạp small','color'=>'red','price_per_minute'=>'500','station_id'=>1],
            ['code'=>'02_100','name'=>'TDM - xe đạp medium','color'=>'green','price_per_minute'=>'1000','station_id'=>1],
            ['code'=>'03_100','name'=>'TDM - xe đạp large','color'=>'blue','price_per_minute'=>'1500','station_id'=>1],
        ];

        $bikes2 = [
            ['code'=>'04_100','name'=>'PL - xe đạp small','color'=>'red','price_per_minute'=>'500','station_id'=>2],
            ['code'=>'05_100','name'=>'PL - xe đạp medium','color'=>'green','price_per_minute'=>'1000','station_id'=>2],
            ['code'=>'06_100','name'=>'PL - xe đạp large','color'=>'blue','price_per_minute'=>'1500','station_id'=>2],
        ];

        $bikes3 = [
            ['code'=>'07_100','name'=>'BD - xe đạp small','color'=>'red','price_per_minute'=>'500','station_id'=>3],
            ['code'=>'08_100','name'=>'BD - xe đạp medium','color'=>'green','price_per_minute'=>'1000','station_id'=>3],
            ['code'=>'09_100','name'=>'BD - xe đạp large','color'=>'blue','price_per_minute'=>'1500','station_id'=>3],
        ];

        // Gộp tất cả các mảng lại để chạy vòng lặp 1 lần duy nhất
        $allBikes = array_merge($bikes1, $bikes2, $bikes3);

        foreach ($allBikes as $bike) {
            Bike::create($bike);
        }
    }
}