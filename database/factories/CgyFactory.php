<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cgy>
 */
class CgyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return ['subject' => $this->faker->address, 'desc' => $this->faker->realtext,
            'pic' => $this->faker->imageUrl, 'sort' => $this->faker->randomNumber,
        ];
    }
}
