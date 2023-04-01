<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::factory(15)->create();
    }
}
