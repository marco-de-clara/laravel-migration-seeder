<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function index() {
        $all_products = Product::all();
        return view('products', ['productss' => $all_products]);
    }
}
