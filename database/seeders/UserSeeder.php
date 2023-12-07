<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert a user into the users table
        DB::table('users')->insert([
            'name' => 'Talib ',
            'email' => 'talib@gmail.com',
            'password' => Hash::make('12345'), // You can set the password as needed
        ]);

    }
}
