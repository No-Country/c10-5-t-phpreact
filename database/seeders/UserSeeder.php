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
            'full_name' => 'admin',
            'email' => 'admin@nocontry.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory()->create([
            'full_name' => 'usuario',
            'email' => 'user@nocontry.com',
            'password' => bcrypt('12345678')
        ])->assignRole('User');

        User::factory()->create([
            'full_name' => 'team leader',
            'email' => 'tl@nocontry.com',
            'password' => bcrypt('12345678')
        ])->assignRole('TeamLeader');
    }
}
