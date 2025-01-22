<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Vanilla Ice Cream', 'image' => 'product-1.jpg', 'price' => 99.00],
            ['name' => 'Chocolate Ice Cream', 'image' => 'product-2.jpg', 'price' => 99.00],
            ['name' => 'Strawberry Ice Cream', 'image' => 'product-3.jpg', 'price' => 99.00],
            ['name' => 'Mint Ice Cream', 'image' => 'product-4.jpg', 'price' => 99.00],
            ['name' => 'Mango Ice Cream', 'image' => 'product-5.jpg', 'price' => 99.00],
        ]);
    }
}
