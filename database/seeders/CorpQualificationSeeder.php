<?php

namespace Database\Seeders;

use App\Models\CorpQualification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorpQualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CorpQualification::create([
            'crqa_corp_id' => '1',
            'crqa_name' => 'skill dasar',
            'crqa_description' => 'harus menguasai dasar dari bahasa pemograman ',
        ]);
        CorpQualification::create([
            'crqa_corp_id' => '2',
            'crqa_name' => 'kualifikasi dasar',
            'crqa_description' => 'harus mempunyai jiwa yang fokus dan konsentrasi',
        ]);
        CorpQualification::create([
            'crqa_corp_id' => '4',
            'crqa_name' => 'kualifikasi dan skil dasar',
            'crqa_description' => 'harus mempunyai jiwa yang kreatif dan memahami tools dari aplikasi blender',
        ]);
    }

}
