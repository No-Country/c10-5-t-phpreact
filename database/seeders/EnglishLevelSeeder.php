<?php

namespace Database\Seeders;

use App\Models\Profile\EnglishLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnglishLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        EnglishLevel::factory()->create([
            'level' => 'A1',
        ]);
        EnglishLevel::factory()->create([
            'level' => 'A2',
        ]);
        EnglishLevel::factory()->create([
            'level' => 'B1',
        ]);
        EnglishLevel::factory()->create([
            'level' => 'B2',
        ]);
        EnglishLevel::factory()->create([
            'level' => 'C1',
        ]);
        EnglishLevel::factory()->create([
            'level' => 'C2',
        ]);
    }
}
