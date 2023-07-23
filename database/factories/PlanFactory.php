<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [            
            "title"=>fake()->title(),
            "icon"=>fake()->imageUrl(),
            "month_price"=>fake()->title(),
            "year_price"=>fake()->title(),
            "priceString"=>fake()->title(),
            "priceYear"=>fake()->title(),
            "promotion"=>fake()->title()
        ];
    }
}
