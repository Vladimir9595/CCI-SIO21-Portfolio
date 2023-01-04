<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640, 480, 'cats', true),
            'content' => $this->faker->paragraph,
            'link' => $this->faker->url,
            'created_at' => now()
        ];
    }
}
