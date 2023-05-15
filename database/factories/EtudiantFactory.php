<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule' => fake()->unique()->numberBetween(1, 20),
            'nom' => fake()->firstName(),
            'prenoms' => fake()->lastName(),
            'dateNaiss' => fake()->date('d-m-Y'),
            'lieuNaiss' => fake()->word(),
            'sexe' => fake()->randomElement(['Féminin', 'Mascculin'])
        ];
    }
}
