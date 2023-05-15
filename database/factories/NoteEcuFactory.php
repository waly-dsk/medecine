<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NoteEcu>
 */
class NoteEcuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule' => fake()->numberBetween(1, 20),
            'codeEcu' => fake()->numberBetween(1, 20),
            'anneeAca' => fake()->randomElement([
                '2018-2019',
                '2019-2020',
                '2020-2021',
            ]),
            'note' => fake()->randomFloat(2, 0, 20),
        ];
    }
}
