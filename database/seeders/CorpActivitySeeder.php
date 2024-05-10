<?php

namespace Database\Seeders;

use App\Models\CorpActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorpActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CorpActivity::create([
            'crac_corp_id' => '1',
            'crac_activity_name' => 'Software Engineering',
            'crac_activity_description' => 'membuat aplikasi website dan mobile',
        ]);
        CorpActivity::create([
            'crac_corp_id' => '2',
            'crac_activity_name' => 'Infrastruktur perangkat',
            'crac_activity_description' => 'memahami dan membuat infrsatruktur keras dan lunak pada komputer',
        ]);
        CorpActivity::create([
            'crac_corp_id' => '3',
            'crac_activity_name' => 'Animation',
            'crac_activity_description' => 'membuat animasi karakter',
        ]);
    }
}
