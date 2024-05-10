<?php

namespace Database\Seeders;

use App\Models\CorpProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorpProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CorpProfile::create([
            'crpp_visi' => 'membangun perusahaan yang maju',
            'crpp_misi' => 'melakukan riset dan ricek',
            'crpp_description' => 'pt.abc merupakan perusahaan bergerak di bidang engineering',
            'crpp_corp_id' => '1',
            'crpp_method' => 'Online',
            'crpp_work_system' => 'WFH',
            'crpp_address' => 'jalan sunyi no. 15',
        ]);

        CorpProfile::create([
            'crpp_visi' => 'membangun perusahaan yang maju dan melesat',
            'crpp_misi' => 'dapat memberikan infrastruktur yang baik',
            'crpp_description' => 'pt.cdf merupakan perusahaan bergerak di bidang infrastruktur',
            'crpp_corp_id' => '2',
            'crpp_method' => 'Offline',
            'crpp_work_system' => 'WFO',
            'crpp_address' => 'jalan bunga tak mekar  no.29',
        ]);

        CorpProfile::create([
            'crpp_visi' => 'membangun perusahaan yang terdepan ',
            'crpp_misi' => 'dapat memberikan teknologi yang tertandingi',
            'crpp_description' => 'pt.hij merupakan perusahaan bergerak di bidang teknologi',
            'crpp_corp_id' => '3',
            'crpp_method' => 'Online dan offline',
            'crpp_work_system' => 'WFO dan WFH',
            'crpp_address' => 'jalan tetap no.29',
        ]);
    }
}
