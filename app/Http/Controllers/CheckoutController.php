<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{

    public function index()

{

    $userId=auth()->id();




 $order=Order::with('user')->where('user_id',$userId)->where('status','pending')->first();



 $orderItems= OrderItem::with('order','product')->where('order_id',$order->id)->get();




 return view('checkout',[ '$orders'=> $order,'orderItems'=>$orderItems]);

}




 public function UpdateToOrder(Request $request){




 $order-> pickup_delivery_date_time= $request->input('delivery_date');

 $order->payment_method = $request->input('payment_method');




 if ($request->input('payment_method') == 'credit_card') {

// Process credit card payment here

     $order->status = 'confirm';

 } else {

 // Cash on delivery

 $order->status = 'pending';
}

 $order->save();

// Redirect to thank you page

return redirect->route('thankyou');

}
}
