<?php

namespace Database\Seeders;

use App\Models\Major;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Major::create([
            'mjr_name' => 'Software_engineering'
        ]);
        Major::create([
            'mjr_name' => 'Multimedia'
        ]);
    }
}
