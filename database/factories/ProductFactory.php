<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->words(2, true),
            'description' => fake()->text(200),
            'price' => rand(10, 100),
            'code' => fake()->unique()->numerify(),
            'image' => 'https://picsum.photos/seed/'. fake()->uuid .'/200',
            'company' => fake()->word(),
            'platform' => fake()->randomElement(['PC', 'Xbox', 'PlayStation', 'Switch']),
        ];
    }
}
