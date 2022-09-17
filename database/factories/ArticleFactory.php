<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numeroArticle' => $this->faker->unique()->randomElement([350,24,221,23,753,986,646]),
            'titre' => $this->faker->sentence(1, true),
            'block1' =>$this->faker->paragraphs(1, true),
            'block2' =>$this->faker->paragraphs(1, true),
            'block3' =>$this->faker->paragraphs(1, true),

        ];
    }
}
