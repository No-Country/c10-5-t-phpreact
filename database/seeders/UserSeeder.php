<?php

namespace Database\Seeders;

use Carbon\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrador',
            'lastname' => 'De Prueba',
            'email' => 'admin@nocontry.com',
            'password' => bcrypt('adminpassword')
        ])->assignRole('Admin');

        User::factory()->create([
            'name' => 'Participante',
            'lastname' => 'De Prueba',
            'email' => 'user@nocontry.com',
            'password' => bcrypt('userpassword')
        ])->assignRole('User');

        User::factory()->create([
            'name' => 'Team Leader',
            'lastname' => 'De Prueba',
            'email' => 'tl@nocontry.com',
            'password' => bcrypt('tlpassword')
        ])->assignRole('TeamLeader');
    }
}
