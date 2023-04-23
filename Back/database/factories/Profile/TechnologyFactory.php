<?php

namespace Database\Factories\Profile;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile\Technology>
 */
class TechnologyFactory extends Factory
{    
    private $technologies = [
        "JavaScript", "Python", "Java", "C++", "Ruby", "PHP", "Swift", 
        "Objective-C", "TypeScript", "C#", "Go", "Kotlin", "Scala", 
        "Rust", "Dart", "Lua"
    ];

    public function definition(): array
    {
        static $order = 1;
        $name = $this->technologies[($order - 1) % count($this->technologies)];
        $order++;
        
        return [
            'name' => $name,
        ];
    }
}
