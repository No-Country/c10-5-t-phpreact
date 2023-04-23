<?php

namespace Database\Factories\Form;

use App\Models\Form\Horary;
use App\Models\Form\Country;
use App\Models\Form\Vertical;
use App\Models\Form\RoleStack;
use App\Models\Form\Experience;
use App\Models\Profile\Technology;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form\FormRegister>
 */
class FormRegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = ['NAMEONE', 'NAMETWO', 'NAMETREE', 'NAMEFOUR', 'NAMEFIVE'];

        $email = ['1@1.gmail', '1@2.gmail', '1@3.gmail', '1@4.gmail', '1@5.gmail'];
        

        return [
            'name' => fake()->randomElement($name),
            'lastname' => fake()->randomElement($name),
            'email' => fake()->unique()->randomElement($email),
            'role_stack_id' => RoleStack::all()->random()->id,
            'technology_id' => Technology::all()->random()->id,
            'experience_id' => Experience::all()->random()->id,
            'country_id' => Country::all()->random()->id,
            'vertical_id' => Vertical::all()->random()->id,
            'horary_id' => Horary::all()->random()->id
        ];
    }
}
