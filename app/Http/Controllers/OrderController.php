<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    //
    function getOrders($id){
        $orders = Order::where('user_id', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);

        return view('user.order_history', ['orders' => $orders]);
    }
}
