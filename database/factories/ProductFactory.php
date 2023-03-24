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
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'stock' => $this->faker->randomDigit(),
            'price' => $this->faker->randomNumber(6),
            'old_price' => $this->faker->randomNumber(6),
            'rating' => 0.0,
            'featured' => $this->faker->boolean(),
            'sale' => $this->faker->boolean(),
            'best_seller' => $this->faker->boolean(),
            'new_product' => $this->faker->boolean()
        ];
    }
}
