<?php

namespace Database\Seeders;

use App\Models\Form\Vertical;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VerticalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vertical::factory(2)->create();
    }
}
