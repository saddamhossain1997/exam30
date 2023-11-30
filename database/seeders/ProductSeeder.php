<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'mobile', 'quantity' => '10', 'price' => '100'],
            ['name' => 'head phone', 'quantity' => '20', 'price' => '200'],
            ['name' => 'cable', 'quantity' => '30', 'price' => '250'],
            ['name' => 'Mobile Charger', 'quantity' => '40', 'price' => '320'],
            ['name' => 'mobile back cover', 'quantity' => '50', 'price' => '350'],
            // Add more data as needed
        ];

        // Insert the data into the 'users' table
        DB::table('products')->insert($data);
    }
}
