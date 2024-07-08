<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_name' => fake()->word(),
            'order_description' => fake()->text(),
            'amount' => fake()->randomNumber(5, false),
            'order_date' => fake()->date('Y-m-d')
        ];
    }
}
