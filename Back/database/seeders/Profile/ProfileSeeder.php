<?php

namespace Database\Seeders\Profile;

use App\Models\Team;
use App\Models\User;
use App\Models\Cohort;
use App\Models\Profile\Profile;
use Illuminate\Database\Seeder;
use App\Models\Profile\Technology;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear los primeros 8 perfiles con el rol de TeamLeader
        Profile::factory()->create([
            'user_id' => 1,
            'country_id' => 1,
            'vertical_id' => 1,
            'horary_id' => 2,
            'role_stack_id' => 1,
            'english_level_id' => 5,
        ])->assignRole('Admin');

        Profile::factory()->create([
            'user_id' => 2,
            'country_id' => 1,
            'vertical_id' => 1,
            'horary_id' => 2,
            'role_stack_id' => 1,
            'english_level_id' => 5,
        ])->assignRole('TeamLeader');

        Profile::factory()->create([
            'user_id' => 3,
            'country_id' => 1,
            'vertical_id' => 1,
            'horary_id' => 2,
            'role_stack_id' => 1,
            'english_level_id' => 5,
        ])->assignRole('TeamLeader');

        Profile::factory()->create([
            'user_id' => 4,
            'country_id' => 1,
            'vertical_id' => 1,
            'horary_id' => 2,
            'role_stack_id' => 1,
            'english_level_id' => 5,
        ])->assignRole('TeamLeader');

        Profile::factory()->create([
            'user_id' => 6,
            'country_id' => 1,
            'vertical_id' => 1,
            'horary_id' => 2,
            'role_stack_id' => 1,
            'english_level_id' => 5,
        ])->assignRole('TeamLeader');

        Profile::factory()->create([
            'user_id' => 7,
            'country_id' => 1,
            'vertical_id' => 1,
            'horary_id' => 2,
            'role_stack_id' => 1,
            'english_level_id' => 5,
        ])->assignRole('TeamLeader');

        Profile::factory()->create([
            'user_id' => 8,
            'country_id' => 1,
            'vertical_id' => 1,
            'horary_id' => 2,
            'role_stack_id' => 1,
            'english_level_id' => 5,
        ])->assignRole('TeamLeader');

        $users = User::skip(8)->take(92)->get();
        $profiles = Profile::factory(count($users))->make();
        
        foreach ($profiles as $key => $profile) {
            $profile->user_id = $users[$key]->id;
            $profile->save();
            $profile->assignRole('User');
        }
        
        $profiles = Profile::all();
        
        foreach ($profiles as $key => $profile) {
            $profile->teams()->attach(Team::all()->random()->id);
            $profile->cohorts()->attach(Cohort::all()->random()->id);
            $profile->technologies()->attach(Technology::all()->random()->id);
        } 
        
    }
}
