<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $id = 1;
        $product = 'Laptop ASUS ROG';
        return view('list_product', compact('id', 'product'));
    }
}
