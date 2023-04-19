<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use App\Models\Cohort;
use Illuminate\Database\Seeder;

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
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory()->create([
            'name' => 'Participante',
            'lastname' => 'De Prueba',
            'email' => 'user@nocontry.com',
            'password' => bcrypt('12345678')
        ])->assignRole('User');

        User::factory()->create([
            'name' => 'Team Leader',
            'lastname' => 'De Prueba',
            'email' => 'tl@nocontry.com',
            'password' => bcrypt('12345678')
        ])->assignRole('TeamLeader');

        
    
        $users = User::factory(100)->create();

        foreach($users as $user){
            $user->assignRole('User');
            $user->teams()->attach(Team::all()->random()->id);
            $user->cohorts()->attach(Cohort::all()->random()->id);
        }

        
       
    }
}
