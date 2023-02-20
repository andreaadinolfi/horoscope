<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'test user',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$F3fVjOxgr/6oHS2jME6c8OaTtZqvnc3qdJS03tkJjFbDbTA0jtd9O ', //the password is 'password'
        ]);

        User::factory(2)->create();
    }
}
