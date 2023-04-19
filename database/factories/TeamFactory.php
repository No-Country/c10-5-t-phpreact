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
            'laravel-node',
            'django-react',
            'emberjs-ruby',
            'spring-boot-angular',
            'expressjs-mongodb',
            'symfony-php',
            'flask-python',
            'graphql-java',
            'nextjs-typescript',
            'nestjs-postgres',
        ];

        return [
            'name' => fake()->unique()->randomElement($teams),
            'cohort_id' => Cohort::all()->random()->id
        ];
    }
}
