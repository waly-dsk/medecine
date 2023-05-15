<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classe>
 */
class ClasseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'codeClasse' => fake()->unique()->numberBetween(0, 9),
            // 'libClasse' => fake()->randomElement(['MG1', 'MG2', 'MG3', 'MG4', 'MG5', 'MG6', 'MG7'])
        ];
    }
}
