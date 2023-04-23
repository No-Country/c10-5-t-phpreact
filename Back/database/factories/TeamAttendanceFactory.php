<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeamAttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

            $week = [1, 2, 3, 4];

            $attended = [1, 0];
    
            return [
    
                'week' => fake()->randomElement($week),
                'date' => now(),
                'justification' => fake()->randomElement($attended),
                'attended' => fake()->randomElement($attended),
                'profile_id' => Profile::all()->random()->id,               
                'team_id' => Team::all()->random()->id,
            ];

    }
}
