<?php

namespace Database\Seeders\Profile;

use App\Models\Profile\SoftSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SoftSkill::factory(5)->create();
    }
}
