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
            'username' => 'test_user',  // Đổi 'name' thành 'username'
            'password_hash' => Hash::make('password123'), // Hash mật khẩu
            'email' => 'admin@example.com',
            'phone' => '0123456789',
            'address' => '123 Test Street',
            'role_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    );

        
        
    }
}