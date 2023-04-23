<?php

namespace Database\Factories\Profile;

use App\Models\Form\Country;
use App\Models\Form\Horary;
use App\Models\Form\RoleStack;
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
            'country_id' => Country::all()->random()->id,
            'vertical_id' => Vertical::all()->random()->id,
            'horary_id' => Horary::all()->random()->id,
            'role_stack_id' => RoleStack::all()->random()->id,
            'english_level_id' => Horary::all()->random()->id
        ];
    }
}