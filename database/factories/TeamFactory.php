<?php

namespace Database\Factories;

use App\Models\Cohort;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $teams = [
            'react-php',
            'vuejs-python',
            'angular-java'
        ];

        return [
            'name' => fake()->unique()->randomElement($teams),
            'cohort_id' => Cohort::all()->random()->id
        ];
    }
}
