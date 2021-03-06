<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // On utilise faker pour générer de fausses données
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'created_at' => now()
        ];
    }
}
