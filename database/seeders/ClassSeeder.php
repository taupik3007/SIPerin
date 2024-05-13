<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::create([
            'cls_major_id' => '1',
            'cls_level' => '12',
            'cls_number' => '2',
        ]);

        Classes::create([
            'cls_major_id' => '1',
            'cls_level' => '12',
            'cls_number' => '1',
        ]);

        Classes::create([
            'cls_major_id' => '2',
            'cls_level' => '12',
            'cls_number' => '2',
        ]);

        Classes::create([
            'cls_major_id' => '2',
            'cls_level' => '12',
            'cls_number' => '1'
        ]);
    }
}
