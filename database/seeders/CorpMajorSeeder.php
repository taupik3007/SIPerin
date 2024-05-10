<?php

namespace Database\Seeders;

use App\Models\CorpMajor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorpMajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CorpMajor::create([
            'crmj_corp_id' => '1',
            'crmj_major_id' => '1',
            
        ]);
        CorpMajor::create([
            'crmj_corp_id' => '2',
            'crmj_major_id' => '1',
            
        ]);
        CorpMajor::create([
            'crmj_corp_id' => '3',
            'crmj_major_id' => '2',
            
        ]);
    }
}
