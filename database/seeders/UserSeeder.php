<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "Marcus",
            "email"=> "mabiorm@gmail.com",
            "password"=> bcrypt("marcus!2M"),
        ]);   
    }
}
