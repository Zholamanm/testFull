<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'image' => $this->faker->imageUrl(),
            'rooms' => $this->faker->numberBetween(1, 5),
            'floor' => $this->faker->numberBetween(1, 20),
            'area' => $this->faker->numberBetween(50, 200),
            'description' => $this->faker->text,
        ];
    }
}
