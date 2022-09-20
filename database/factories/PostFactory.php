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
            'title' => $this->faker->sentence(),
            'content' => $this->faker->text(),
            'image' => 'posts/' . $this->faker->image('storage/app/public/posts', 640, 480, null, false, true, null, false), //true almacena la ruta completa, ej:public/storage/posts/nombreImagen
        ];
    }
}
