<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class MenuController extends Controller
{
    public function menu()
    {
        $products=Product::with('category')->get();
        // dd($products);
        return view('menu',compact('products'));
    }
}
