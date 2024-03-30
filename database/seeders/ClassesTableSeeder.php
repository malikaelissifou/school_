<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("classes")->insert([
            ["libellé"=>"6ème"],
            ["libellé"=>"5ème"],
            ["libellé"=>"4ème"],
            ["libellé"=>"3ème"],
            ["libellé"=>"2nde"],
            ["libellé"=>"1ère"],
            ["libellé"=>"Tle"]
        ]);
    }
}
