<?php

namespace Database\Seeders;

use App\Models\UserDocument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserDocument::create([
            'usdc_user_id' => '1',
            'usdc_name' => 'surat pengantar PKL',
            'usdc_file' => 'surat_pengantar_taupik.pdf',
        ]);
        UserDocument::create([
            'usdc_user_id' => '2',
            'usdc_name' => 'surat pengantar PKL',
            'usdc_file' => 'surat_pengantar_raneu.pdf',
        ]);
        UserDocument::create([
            'usdc_user_id' => '3',
            'usdc_name' => 'surat pengantar PKL',
            'usdc_file' => 'surat_pengantar_della.pdf',
        ]);
    }
}
