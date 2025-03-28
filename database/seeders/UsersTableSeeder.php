<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'password_hash' => Hash::make('password123'),
                'email' => 'admin@example.com',
                'phone' => '0123456789',
                'address' => '123 Admin Street',
                'created_at' => now(),
            ],
            [
                'username' => 'user1',
                'password_hash' => Hash::make('password123'),
                'email' => 'user1@example.com',
                'phone' => '0987654321',
                'address' => '456 User Road',
                'created_at' => now(),
            ],
        ]);
        
    }
}
