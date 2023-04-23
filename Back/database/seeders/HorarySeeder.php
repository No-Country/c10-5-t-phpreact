<?php

namespace Database\Seeders;

use App\Models\Form\Horary;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HorarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Horary::factory(3)->create();
    }
}
