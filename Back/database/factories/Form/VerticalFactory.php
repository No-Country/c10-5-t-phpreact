<?php

namespace Database\Factories\Form;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form\Vertical>
 */
class VerticalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vertical = [
            'Web/App',
            'No-Code'
        ];

        return [
            'name' => fake()->unique()->randomElement($vertical)
        ];
    }
}
