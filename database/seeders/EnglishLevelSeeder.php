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
        $levels = ['A1', 'A2', 'B1', 'B2', 'C1', 'C2'];

        foreach ($levels as $level) {
            EnglishLevel::factory()->create([
                'level' => $level,
            ]);
        }
    }
}
