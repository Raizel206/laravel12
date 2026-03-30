<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ward;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $wards_json = file_get_contents("https://production.cas.so/address-kit/2025-07-01/provinces/79/communes");
        $wards = json_decode($wards_json)->communes;
        foreach ($wards as $ward) {
            Ward::create(['code'=>$ward->code, 
                          'name'=>$ward->name,
                          'englishName'=>$ward->englishName,
                          'administrativeLevel'=>$ward->administrativeLevel,
                          'provinceCode'=>$ward->provinceCode,
                          'provinceName'=>$ward->provinceName,
                          'decree'=>$ward->decree, ]);
            
        }
    }
}
