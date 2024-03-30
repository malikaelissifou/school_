<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("matieres")->insert([
            ["intitule"=>"Statistiques"],
            ["intitule"=>"Economie"],
            ["intitule"=>"Mathematiques"],
            ["intitule"=>"Economie"],
            ["intitule"=>"Finances"],
            ["intitule"=>"Web"],
            ["intitule"=>"Java"],
            ["intitule"=>"Python"]
        ]);
    }
}
