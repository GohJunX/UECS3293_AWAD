<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class CheckoutController extends Controller
{

    public function index()
    {
        
        $products= Product::all();
        return view('checkout',['products'=>$products]);
    }

    // public function thanks()
    // {
    //     return view('thankyou');
    // }



    // public function checkout()
    // {
    //     \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

    //     $products = Product::all();
    //     $lineItems = [];
    //     $totalPrice = 0;
    //     foreach ($products as $product) {
    //         $totalPrice += $product->price;
    //         $lineItems[] = [
    //             'price_data' => [
    //                 'currency' => 'usd',
    //                 'product_data' => [
    //                     'name' => $product->name,
    //                     'images' => [$product->image]
    //                 ],
    //                 'unit_amount' => $product->price * 100,
    //             ],
    //             'quantity' => 1,
    //         ];
    //     }
    //     $session = \Stripe\Checkout\Session::create([
    //         'line_items' => $lineItems,
    //         'mode' => 'payment',
    //         'success_url' => route('checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
    //         'cancel_url' => route('checkout.cancel', [], true),
    //     ]);

    //     $order = new Order();
    //     $order->status = 'unpaid';
    //     $order->total_price = $totalPrice;
    //     $order->session_id = $session->id;
    //     $order->save();

    //     return redirect($session->url);
    // }

    public function addToOrder(Request $request){

        
        $order = new Order;
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        // $order->total_amount = $total_price;
        $order->payment_method = $request->input('payment_method');

        if ($request->input('payment_method') == 'credit_card') {
            // Process credit card payment here
            $order->status = 'paid';
        } else {
            // Cash on delivery
            $order->status = 'pending';
        }

        $order->save();

        // Redirect to thank you page
        return redirect->route('thankyou');

        // $order=Order::create([
        //     'user_id'=>auth()->user()->id,
        //     'billing_email' => $request->email,
        //     'billing_name' => $request->name,
        //     'billing_address' => $request->address,
        //     'billing_city' => $request->city,
        //     'billing_province' => $request->province,
        //     'billing_postalcode' => $request->postalcode,
        //     'billing_phone' => $request->phone,
        //     'billing_name_on_card' => $request->name_on_card,
        //     'billing_total' => getNumbers()->get('newTotal'),
        //     'error' => $error,

        // ]);

    }


    // public function success(Request $request)
    // {
    //     \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    //     $sessionId = $request->get('session_id');

    //     try {
    //         $session = \Stripe\Checkout\Session::retrieve($sessionId);
    //         if (!$session) {
    //             throw new NotFoundHttpException;
    //         }
    //         $customer = \Stripe\Customer::retrieve($session->customer);

    //         $order = Order::where('session_id', $session->id)->first();
    //         if (!$order) {
    //             throw new NotFoundHttpException();
    //         }
    //         if ($order->status === 'unpaid') {
    //             $order->status = 'paid';
    //             $order->save();
    //         }

    //         return view('product.checkout-success', compact('customer'));
    //     } catch (\Exception $e) {
    //         throw new NotFoundHttpException();
    //     }

    // }

    // public function cancel()
    // {

    // }

}
