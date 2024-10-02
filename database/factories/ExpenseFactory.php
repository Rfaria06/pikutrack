<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    private $expenseNames = [
        'Carwash',
        'Groceries',
        'Rent',
        'Utilities',
        'Internet',
        'Phone Bill',
        'Gas',
        'Electricity',
        'Water Bill',
        'Insurance',
        'Fuel',
        'Car Maintenance',
        'Parking Fees',
        'Public Transportation',
        'Gym Membership',
        'Medical Expenses',
        'Prescription Medications',
        'Dining Out',
        'Entertainment',
        'Streaming Services',
        'Clothing',
        'Laundry',
        'Pet Care',
        'Child Care',
        'Household Supplies',
        'Furniture',
        'Electronics',
        'Subscriptions',
        'Loan Payments',
        'Credit Card Payments',
        'Savings Contribution',
        'Charity Donations',
        'Travel',
        'Hotel',
        'Airfare',
        'Taxi or Ride-share',
        'Gifts',
        'Home Repairs',
        'Education',
        'Books',
        'Office Supplies',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement($this->expenseNames),
            'description' => fake()->randomHtml(),
            'amount' => fake()->numberBetween(100, 2500),
            'date' => fake()->dateTimeThisMonth(),
            'user_id' => User::factory(),
        ];
    }
}
