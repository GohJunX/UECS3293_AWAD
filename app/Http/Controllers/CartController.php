<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CartController extends Controller
{
    // //Without Authentication
    // public function showCart()
    // {
    //     // Get the user's shopping cart order
    //     $order = Order::with('orderItems.product')->where('status', 'pending')->first();
    
    //     // If the user has no items in their shopping cart, display an empty cart message
    //     if (!$order || $order->orderItems->isEmpty()) {
    //         return view('cart')->with('message', 'Your cart is empty!');
    //     }
    
    //     // Assign the order items to the $cartItems variable
    //     $cartItems = $order->orderItems;
    
    //     // Calculate the total cost of the items in the shopping cart
    //     $total = $cartItems->sum(function ($item) {
    //         return $item->quantity * $item->product->price;
    //     });
    
    //     // Pass the order items and total cost to the cart view
    //     return view('cart')->with([
    //         'cartItems' => $cartItems,
    //         'total' => $total
    //     ]);
    // }    
    // With Authentication
    public function showCart()
    {
        // Get the authenticated user's ID
        $userId = auth()->id();
    
        // Get the user's shopping cart order
        $order = Order::with('orderItems.product')
                    ->where('status', 'pending')
                    ->where('user_id', $userId)
                    ->first();
    
        // If the user has no items in their shopping cart, display an empty cart message
        if (!$order || $order->orderItems->isEmpty()) {
            
            return view('cart')->with('message', 'Your cart is empty!');
        }
    
        // Assign the order items to the $cartItems variable
        $cartItems = $order->orderItems;
    
        // Calculate the total cost of the items in the shopping cart
        $total = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });
    
        // Pass the order items and total cost to the cart view
        return view('cart')->with([
            'cartItems' => $cartItems,
            'total' => $total
        ]);
    }    
    public function addToCart(Request $request){
        $product=OrderItem::create([
            'quantity' => $request->quantity,
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
        ]);
        $product->save();
        return redirect()->route('cart')->with('success', 'Product has been put in shopping cart!');
    }
    function deleteItem($id)
    {
        $data = OrderItem::find($id);
        $data->delete();
        return redirect("cart");
    }
}
