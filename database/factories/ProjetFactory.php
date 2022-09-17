<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Cagnotte;
use App\Models\Financement;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projets>
 */
class ProjetFactory extends Factory
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
            'themes_id' => Theme::all()->random()->id,
            'nom'=> $this->faker->sentence(1, true),
            'codeProjet' => $this->faker->unique()->randomElement([350,24,221,482,23,753,986,646,21,800,655,455]),
            'description'=> $this->faker->sentence(2, true),
            'articles_id' => Article::all()->random()->id,
            'cagnottes_id' => Cagnotte::all()->random()->id,
            'users_id' => User::all()->random()->id
        ];
    }
}
