<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            [
                'email' => 'desarrollo@juarezdigimark.com',
            ],
            [
                'name' => 'user',
                'last_name' => 'test',
                'password' => 'temporal.2026',
                'role' => UserRole::Admin,
                'status' => UserStatus::Active,
                'email_verified_at' => now(),

            ],
        );
    }
}
