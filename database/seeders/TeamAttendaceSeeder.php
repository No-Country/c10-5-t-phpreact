<?php

namespace Database\Seeders;

use App\Models\TeamAttendance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamAttendaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamAttendance::factory(200)->create();
    }
}
