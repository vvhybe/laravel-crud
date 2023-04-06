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
    public function definition(): array{
        $CATEGORIES = [
        "electronics",
        "clothing",
        "food",
        "toys",
        "books",
        "furniture",
        "sports",
        "tools",
        "outdoors",
        "automotive",
        "beauty",
        "health",
        "home",
        "garden",
        "office",
        "pets",
        "baby",
        "luggage",
        "jewelry",
        "shoes",
        "music",
        "movies",
        "games",
        "industrial",
        "other",
    ];
        return [
            "name" => $this->faker->name,
            "description" => $this->faker->text,
            "category" => $CATEGORIES[array_rand($CATEGORIES)],
            "price" => $this->faker->randomFloat(2, 0, 1000),
            "quantity" => $this->faker->randomNumber(2),
        ];
    }
}
