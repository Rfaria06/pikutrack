<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->slug(),
            'description' => fake()->randomHtml(),
            'amount' => fake()->numberBetween(100, 2500),
            'date' => fake()->dateTimeThisMonth(),
            'user_id' => User::factory(),
        ];
    }
}
