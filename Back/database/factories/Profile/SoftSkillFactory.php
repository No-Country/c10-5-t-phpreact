<?php

namespace Database\Factories\Profile;

use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile\SoftSkill>
 */
class SoftSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $soft_skills = [
            'compromise',
            'communication',
            'initiative',
            'proactivity',
            'collaboration',
        ];

        $level = [10, 9, 10, 5, 8];

        return [
            'name' => fake()->randomElement($soft_skills),
            'level' => fake()->randomElement($level),
            'profile_id' => Profile::all()->random()->id
        ];
    }
}
