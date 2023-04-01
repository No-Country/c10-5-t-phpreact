<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\TeamSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CohortSeeder;
use Database\Seeders\HorarySeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\VerticalSeeder;
use Database\Seeders\RoleStackSeeder;
use Database\Seeders\ExperienceSeeder;
use Database\Seeders\TechnologySeeder;
use Database\Seeders\EnglishLevelSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CountrySeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(HorarySeeder::class);
        $this->call(RoleStackSeeder::class);
        $this->call(VerticalSeeder::class);
        $this->call(TechnologySeeder::class);

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EnglishLevelSeeder::class);
        $this->call(CohortSeeder::class);
        $this->call(TeamSeeder::class);
    }
}
