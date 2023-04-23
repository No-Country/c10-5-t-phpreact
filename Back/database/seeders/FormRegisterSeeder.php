<?php

namespace Database\Seeders;

use App\Models\Form\FormRegister;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FormRegister::factory(5)->create();
    }
}
