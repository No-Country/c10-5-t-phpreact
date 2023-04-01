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
            'cohorte-1',
            'cohorte-2',
            'cohorte-3',
            'cohorte-4',
            'cohorte-5',
            'cohorte-6'
        ];

        return [
            'name' => fake()->unique()->randomElement($cohorts)
        ];
    }
}
