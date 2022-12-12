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
        return ['user_id' => $this->faker->randomNumber, 'author' => $this->faker->name,
            'subject' => $this->faker->address, 'content' => $this->faker->realtext,
            'pic' => $this->faker->imageUrl, 'cgy_id' => $this->faker->Numberbetween(0, 99)];
    }
}