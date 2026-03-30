<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name'=>'admin', 'email'=>'admin@gmail.com','password'=>bcrypt('12345')],
            ['name'=>'user01', 'email'=>'user01@gmail.com','password'=>bcrypt('12345')],
            ['name'=>'user02', 'email'=>'user02@gmail.com','password'=>bcrypt('12345')],
            ['name'=>'user03', 'email'=>'user03@gmail.com','password'=>bcrypt('12345')],
            ['name'=>'user04', 'email'=>'user04@gmail.com','password'=>bcrypt('12345')],
            ['name'=>'user05', 'email'=>'user05@gmail.com','password'=>bcrypt('12345')],
            ['name'=>'user06', 'email'=>'user06@gmail.com','password'=>bcrypt('12345')],
            ['name'=>'user07', 'email'=>'user07@gmail.com','password'=>bcrypt('12345')],
            ['name'=>'user08', 'email'=>'user08@gmail.com','password'=>bcrypt('12345')],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
