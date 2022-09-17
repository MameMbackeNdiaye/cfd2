<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Financements>
 */
class FinancementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'codeFinancement' => $this->faker->unique()->randomElement([350,111,999,333,666,888,24,221,482,23,753,986,646,21,800,655,455]),
            'nom'=> $this->faker->sentence(1, true),
            'dateFinancement'=> $this->faker->dateTime(),
            'projet_id' => Projet::all()->random()->id,
            'sommeFinancee'=> $this->faker->randomFloat(),
            'etatProjet'=> $this->faker->randomElement([0,1]),

        ];
    }
}
