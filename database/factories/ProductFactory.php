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
    public function definition(): array
    {
        return [
            'name'=>fake()->text(10),
            'images'=>fake()->imageUrl(),
            'price'=>fake()->randomNumber(8),
            'category_id'=>fake()
            ->randomElement(\App\Models\Category::pluck('id')->toArray()),
            'quantity'=>rand(0,10),
            'status'=>fake()->boolean()
        ];
    }
}
