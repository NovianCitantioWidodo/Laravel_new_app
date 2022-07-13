<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(5),
            'slug' => fake()->slug(),
            'excerpt' => fake()->realText($maxNbChars = 200, $indexSize = 5),
            'body' => collect(fake()->paragraphs(mt_rand(5,10)))->map(fn($p) => "<p>$p</p>")->implode(""),
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,5)
        ];
    }
}
