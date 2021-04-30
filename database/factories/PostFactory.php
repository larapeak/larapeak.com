<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => 'test',
            'body' => $this->faker->paragraph,
            'publish_date' => $this->faker->boolean(50) ? $this->faker->dateTimeBetween('-5 years') : null,
            'published' => true,
        ];
    }
}