<?php

namespace Database\Factories\Form;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form\RoleStack>
 */
class RoleStackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $role_stacks = [
            'FRONTEND',
            'BACKEND',
            'FULLSTACK',
            'DESIGNER UX/UI',
            'QA TESTER',
            'PRODUCT MANAGER',
            'DEVOPS'
        ];

        return [
            'name' => fake()->unique()->randomElement($role_stacks)
        ];
    }
}
