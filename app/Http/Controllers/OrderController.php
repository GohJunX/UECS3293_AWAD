<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Session;



class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $orders = OrderItem::with(['order.user', 'product'])->orderBy('created_at','desc')->paginate(15);
        $currentPage = $orders->currentPage();
        $startIndex = ($currentPage - 1) * 15;
        
        return view('admin/orders', compact('orders','startIndex'));
    }
    
    

    public function show($id)
{   
    if(auth()->user()->role=='admin'){
        $order = Order::with(['user', 'orderItems.product'])->findOrFail($id);
        return view('admin/order-show', ['order' => $order]);
    } else {
        $order = Order::with(['user', 'orderItems.product'])->findOrFail($id);
        $orderItems = OrderItem::where('order_id', $order->id)->get();

        // Calculate the total cost of the items in the shopping cart
        $total = $orderItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        return view('user/order-detailed', ['order' => $order, 'orderItems' => $orderItems,'total'=>$total]);
    }
}

    public function edit($id){
        $statuses = Order::getPossibleStatusValues();
        $order=Order::with(['user', 'orderItems.product'])->findOrFail($id);
        return view('admin/order-edit', compact('order','statuses'));
    }
    public function updateStatus(Request $request, $id)
    {
        $order=Order::with(['user', 'orderItems.product'])->findOrFail($id);
        // update the order status with the new status from the request
        $order->status = $request->status;
        $order->save();

        // redirect back to the order details page
        return redirect()->route('admin.orders.show', ['order' => $order]);
    }


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
