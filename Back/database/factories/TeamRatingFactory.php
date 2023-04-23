<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamRating>
 */
class TeamRatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $week = [1, 2, 3, 4];

        $soft_skills = [1, 0];

        $ratings_sprint = [1, 2, 3, 4, 5];
        return [

            'week' => fake()->randomElement($week),
            'date' => now(),
            'compromise' => fake()->randomElement($soft_skills),
            'communication' => fake()->randomElement($soft_skills),
            'initiative' => fake()->randomElement($soft_skills),
            'proactivity' => fake()->randomElement($soft_skills),
            'organization' => fake()->randomElement($soft_skills),
            'collaboration' => fake()->randomElement($soft_skills),
            'sprint_rating' => fake()->randomElement($ratings_sprint),
            'team_id' => Team::all()->random()->id,
        ];
    }
}
