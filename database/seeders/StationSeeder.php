<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Station;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stations = [
            [
                'name' => 'Trạm thủ dầu một',
                'image' => 'thudaumot.jpg',
                'address' => 'Thu dau mot',
                'status' => 'active',
                'ward_id' => 1,
                'total_bikes' => 10
            ],
            [
                'name' => 'Trạm phú lợi',
                'image' => 'phuloi.jpg',
                'address' => 'Phu loi',
                'status' => 'active',
                'ward_id' => 1,
                'total_bikes' => 20
            ],
            [
                'name' => 'Trạm bình dương',
                'image' => 'binhduong.jpg',
                'address' => 'binh duong',
                'status' => 'active',
                'ward_id' => 1,
                'total_bikes' => 30
            ],
        ];

        foreach ($stations as $station) {
            Station::create($station);
        }
    }
}