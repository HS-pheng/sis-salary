<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campus::create([
            "name" => "Kindergarten, Toul Kork Boeng Kok",
        ]);

        Campus::create([
            "name" => "Primary Campus, Boeng Kok 1",
        ]);

        Campus::create([
            "name" => "Secondary Campus, Sangkat Tonle Basak",
        ]);
    }
}
