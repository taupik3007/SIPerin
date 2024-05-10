<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'taupik',
            'email' => 'awikwok@gmail.com',
            'password' => '123123121',
        ]);
        User::create([
            'name' => 'raneu',
            'email' => 'raneunagano@gmail.com',
            'password' => '123456789',
        ]);
        User::create([
            'name' => 'della',
            'email' => 'della@gmail.com',
            'password' => '987654321',
        ]);
    }
}
