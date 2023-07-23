<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AddOn>
 */
class AddOnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=>fake()->name(),
            "desc"=>fake()->name(),
            "month_price"=>fake()->title(),
            "year_price"=>fake()->title(),
            "month_value"=>fake()->title(),
            "year_value"=>fake()->title(),
        ];
    }
}
