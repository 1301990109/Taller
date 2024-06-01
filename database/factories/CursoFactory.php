<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return[
            'modelo' => $this->faker->word(),
            'cilindraje' => $this->faker->numberBetween(100,890),
            'año' => $this->faker->numberBetween(2020,2024),
            'descripcion' => $this->faker->word(),
            'image' => ''

        ];
    }
}

