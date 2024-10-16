<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\User;
use Illuminate\Database\Seeder;
use InvalidArgumentException;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_password = env('ADMIN_PASSWORD');
        $admin_email = env('ADMIN_EMAIL');

        if (empty($admin_password)) {
            throw new InvalidArgumentException('ADMIN_PASSWORD is not set or is empty in the environment.');
        }
        if (empty($admin_email)) {
            throw new InvalidArgumentException('ADMIN_EMAIL is not set or is empty in the environment.');
        }

        User::create([
            'name' => 'Admin User',
            'email' => $admin_email,
            'password' => $admin_password,
            'user_type' => UserType::ADMIN,
        ]);
    }
}
