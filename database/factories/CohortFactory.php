<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cohort>
 */
class CohortFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cohorts = [
            'cohorte-2021',
            'cohorte-2022',
        ];

        $active = [
            'current',
            'terminated'
        ];

        return [
            'name' => fake()->unique()->randomElement($cohorts),
            'active' => fake()->unique()->randomElement($active)
        ];
    }
}
