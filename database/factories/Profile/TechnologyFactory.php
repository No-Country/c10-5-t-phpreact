<?php

namespace Database\Factories\Profile;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile\Technology>
 */
class TechnologyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   

        $technologies = ["JavaScript",
         "Python", "Java", "C++", "Ruby", "PHP", "Swift", 
         "Objective-C", "TypeScript", "C#", "Go", "Kotlin", 
         "Scala", "Rust", "Dart", "Lua"];

        return [
            "name" => fake()->unique()->randomElement($technologies)
        ];
    }
}
