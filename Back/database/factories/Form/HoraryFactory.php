<?php

namespace Database\Factories\Form;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form\Horary>
 */
class HoraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $horary = [
            'Mañana',
            'Tarde',
            'Full-Time'
        ];

        return [
            'name' => fake()->unique()->randomElement($horary)
        ];
    }
}
