<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\Expense;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '12345678',
            'user_type' => UserType::NORMAL,
        ]);

        Expense::factory()->count(25)->create([
            'user_id' => $testUser->id,
        ]);
    }
}
