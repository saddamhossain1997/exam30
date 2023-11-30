<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $data = [
            ['name' => 'saddam', 'email' => 'saddam@gmail.com', 'password' => Hash::make('123456789')],


            // Add more data as needed
        ];

        // Insert the data into the 'users' table
        DB::table('users')->insert($data);
    }
}
