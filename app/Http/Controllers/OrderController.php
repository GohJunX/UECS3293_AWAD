<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;


class OrderController extends Controller
{
    //
    function getOrders($id){
        $user = User::find($id); // Find the user with ID 1
        $orders = $user->orders; // Get all orders for the user
        $orders = $orders->orderBy('created_at', 'desc')
                         ->paginate(10);
        
        
        // $orders = Order::where('user_id', $id)
        // ->orderBy('created_at', 'desc')
        // ->paginate(5);

        return view('user.order_history', ['orders' => $orders]);
    }
}
