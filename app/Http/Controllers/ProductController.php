<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')->orderBy('created_at','desc')->paginate(15);
        $currentPage = $products->currentPage();
        $startIndex = ($currentPage - 1) * 15;
        
        return view('admin/products', compact('products', 'startIndex'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product', compact('product'));
    }
    public function create(){
        $categories= Category::all();
        return view('admin/product-create',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'quantity'=> 'required|integer|min:1',
            'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'category_id'=>'required|exists:categories,id',
        ]);
        $product=Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);
        $product->save();
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
    }
    public function edit($id){
        $categories=Category::all();
        $product=Product::find($id);
        return view('admin/product-edit', compact('product', 'categories'));
    }
    public function update(Request $request,Product $product){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id'
        ]);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }
        public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
    }
    
}
