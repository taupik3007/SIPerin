<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserProfile::create([
            'uspf_user_id' => '1',
            'uspf_gender' => 'laki-laki',
            'uspf_birth_place' => 'bandung',
            'uspf_date_of_birth' => '2001-12-21',
            'uspf_religion' => 'cv.pdf',
            'uspf_nis' => '100291738',
            'uspf_CV' => 'cv.pdf',
        ]);

        UserProfile::create([
            'uspf_user_id' => '2',
            'uspf_gender' => 'perempuan',
            'uspf_birth_place' => 'garut',
            'uspf_date_of_birth' => '2001-12-21',
            'uspf_religion' => 'indonesia',
            'uspf_nis' => '987276345',
            'uspf_CV' => 'cvreal.pdf',
        ]);

        UserProfile::create([
            'uspf_user_id' => '3',
            'uspf_gender' => 'perempuan',
            'uspf_birth_place' => 'bandung',
            'uspf_date_of_birth' => '2001-12-21',
            'uspf_religion' => 'indonesia',
            'uspf_nis' => '167672653',
            'uspf_CV' => 'cv1.pdf',
        ]);
    }
}
