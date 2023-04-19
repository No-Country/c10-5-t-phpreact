<?php

namespace Database\Factories\Profile;

use App\Models\Form\Country;
use App\Models\Form\Horary;
use App\Models\Form\Vertical;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->unique()->random()->id,
            'country_id' => Country::all()->random()->id,
            'vertical_id' => Vertical::all()->random()->id,
            'horary_id' => Horary::all()->random()->id
        ];
    }
}
