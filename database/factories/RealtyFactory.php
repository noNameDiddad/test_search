<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Realty>
 */
class RealtyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "price" => fake()->numberBetween(10, 100) * 10000,
            "bedrooms_count" => fake()->numberBetween(1,7),
            "bathrooms_count" => fake()->numberBetween(1,7),
            "storeys_count" => fake()->numberBetween(1,7),
            "garages_count" => fake()->numberBetween(1,7),
        ];
    }
}
