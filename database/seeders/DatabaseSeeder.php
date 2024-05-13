<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(MajorSeeder::class);
        $this->call(ClassSeeder::class);
        $this->call(CorpSeeder::class);

       $this->call(UserSeeder::class);
        $this->call(UserDocumentSeeder::class);
        $this->call(CorpProfileSeeder::class);
        $this->call(CorpActivitySeeder::class);
        $this->call(CorpMajorSeeder::class);
        $this->call(CorpQualificationSeeder::class);
        $this->call(UserProfileSeeder::class);
        $this->call(ApplyCorpSeeder::class);

        

        
    }
}
