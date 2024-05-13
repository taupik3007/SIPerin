<?php

namespace Database\Seeders;

use App\Models\Corp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Corp::create([
            'crp_name' => 'pt. abc',
            'crp_sector' => 'engineering',
            'crp_corp_image' => 'abc.png',
        ]);
        Corp::create([
            'crp_name' => 'pt. cdf',
            'crp_sector' => 'infrastruktur',
            'crp_corp_image' => 'cdf.jpeg',
        ]);
        Corp::create([
            'crp_name' => 'pt.hij',
            'crp_sector' => 'technology',
            'crp_corp_image' => 'hij.jpg',
        ]);
    }
}
