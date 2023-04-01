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
            'full_name' => 'Administrador',
            'email' => 'admin@nocontry.com',
            'password' => bcrypt('adminpassword')
        ])->assignRole('Admin');

        User::factory()->create([
            'full_name' => 'Participante',
            'email' => 'user@nocontry.com',
            'password' => bcrypt('userpassword')
        ])->assignRole('User');

        User::factory()->create([
            'full_name' => 'Team Leader',
            'email' => 'tl@nocontry.com',
            'password' => bcrypt('tlpassword')
        ])->assignRole('TeamLeader');
    }
}
