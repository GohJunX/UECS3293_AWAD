<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Session;

class CheckoutController extends Controller
{

    public function index()

{

    $userId=auth()->id();




 $order=Order::with('user')->where('user_id',$userId)->where('status','pending')->first();



 $orderItems= OrderItem::with('order','product')->where('order_id',$order->id)->get();




 return view('checkout',['order'=> $order,'orderItems'=>$orderItems]);

}




 public function updateToOrder(Request $request){
    $userId=auth()->id();
$order=Order::with('user')->where('user_id',$userId)->where('status','pending')->first();
 $order->pickup_delivery_date_time = $request->delivery_date;
 $order->payment_method = $request->payment_method;

 if ($request->input('payment_method') == 'credit card') {

// Process credit card payment here

     $order->status = 'confirmed';

 } else {

 // Cash on delivery

 $order->status = 'pending';
}

 $order->save();

// Redirect to thank you page

return redirect()->route('thankyou');

}
}
