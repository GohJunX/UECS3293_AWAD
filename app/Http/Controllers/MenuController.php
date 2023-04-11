<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class MenuController extends Controller
{
    public function menu(Request $request)
    {
        $data=Product::all();
        return view('menu',['products'=>$data]);
    }
}
