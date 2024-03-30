<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Etudiant;
use App\Models\Prof;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Etudiant::factory(20)->create();
        Prof::factory(10)->create();
       $this->call(ClassesTableSeeder::class);
    }
}
