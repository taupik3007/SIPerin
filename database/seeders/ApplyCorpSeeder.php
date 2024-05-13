<?php

namespace Database\Seeders;

use App\Models\ApplyCorp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplyCorpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApplyCorp::create([
            'apcr_corp_id' => '3',
            'apcr_user_id' => '2',
            'apcr_status' => 'diterima',
        ]);
        ApplyCorp::create([
            'apcr_corp_id' => '2',
            'apcr_user_id' => '1',
            'apcr_status' => 'ditolak',
        ]);
        ApplyCorp::create([
            'apcr_corp_id' => '1',
            'apcr_user_id' => '3',
            'apcr_status' => 'diterima',
        ]);
    }
}
