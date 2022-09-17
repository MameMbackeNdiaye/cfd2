<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cagnotte>
 */
class CagnotteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codeCagnotte' => $this->faker->unique()->randomElement([350,24,221,23,753,986,646]),
            'dateDebut'=> $this->faker->dateTime(),
            'dateFin'=> $this->faker->dateTime(),
            'somme'=> $this->faker->randomFloat()

        ];
    }
}
