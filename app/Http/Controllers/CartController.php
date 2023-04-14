<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Session;

class CartController extends Controller
{

    
    public function __construct(){
        $this->middleware('auth');
    }


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
        
        $order->total_amount=$total;
        $order->save();
      
        // Pass the order items and total cost to the cart view
        return view('cart')->with([
            'cartItems' => $cartItems,
            'total' => $total
        ]);
    }    
    public function addToCart(Request $request){
        $userId = auth()->id();
        $order=Order::with('user')->where('user_id',$userId)->where('status','pending')->first();
        if(!$order){
            $order=Order::create(['status'=>'pending','user_id'=>$userId]);
            $order->save();
        }
        
        $product=OrderItem::create([
            'quantity' => $request->quantity,
            'order_id' => $order->id,
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
