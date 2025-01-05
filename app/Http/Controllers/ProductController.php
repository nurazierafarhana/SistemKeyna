<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        // Static product data (this will simulate products without a database)
        $products = [
            (object) [
                'name' => 'Vanilla Ice Cream',
                'price' => 5,
                'image' => 'product-1.jpg',
                'description' => 'Delicious vanilla ice cream made with the finest ingredients.',
            ],
            (object) [
                'name' => 'Chocolate Ice Cream',
                'price' => 8,
                'image' => 'product-2.jpg',
                'description' => 'Rich and creamy chocolate ice cream.',
            ],
            (object) [
                'name' => 'Strawberry Ice Cream',
                'price' => 10,
                'image' => 'product-3.jpg',
                'description' => 'Fresh and sweet strawberry ice cream.',
            ],
            (object) [
                'name' => 'Mango Ice Cream',
                'price' => 10,
                'image' => 'product-4.jpg',
                'description' => 'Tropical mango ice cream bursting with flavor.',
            ],
            (object) [
                'name' => 'Pistachio Ice Cream',
                'price' => 12,
                'image' => 'product-5.jpg',
                'description' => 'A rich, nutty pistachio ice cream for true fans of this flavor.',
            ],
        ];

        return view('products.index', compact('products'));
    }
}
