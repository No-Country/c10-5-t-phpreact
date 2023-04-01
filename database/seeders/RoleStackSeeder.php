<?php

namespace Database\Seeders;

use App\Models\Form\RoleStack;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleStackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoleStack::factory(7)->create();
    }
}
