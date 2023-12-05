<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'User User',
            'email' => 'user@example.com',
            'password' => bcrypt('user'),
            'role' => 'user',
        ]);
    }
}
