<?php

namespace Database\Factories\Form;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $experiencies = [
            '6 Meses',
            '1 año',
            '2 años',
            '3 años',
            '4 años',
            '5 años',
            '6 años'
        ];

        return [
            'name' => fake()->unique()->randomElement($experiencies)
        ];
    }
}
