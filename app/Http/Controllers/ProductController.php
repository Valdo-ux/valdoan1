<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showList()
    {
        $products = [
            ['id' => 1, 'name' => 'Dumbbell 10kg'],
            ['id' => 2, 'name' => 'Yoga Mat'],
            ['id' => 3, 'name' => 'Skipping Rope'],
        ];

        return view('list_product', compact('products'));
    }
}
