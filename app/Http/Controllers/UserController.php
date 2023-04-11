<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($id){
        $user = User::find($id);
        // dd($user->name);
        $orders = Order::where('user_id', $user->id)
                        ->orderBy('created_at','desc')
                        ->take(5)
                        ->get();
        // if($orders->count()==0)
        //     $orders=null;
        // else{
        //     foreach($orders as $order){
        //         $orderItems = $order->orderItems();
        //     }
        // }
        foreach($orders as $order){
         $orderItems = $order->orderItems();
        }
        return view('user.profile', compact('user', 'orders'));
    }

    public function editProfile($id){
        $user = User::find($id);
        return view('user.edit_profile',compact('user'));

    } 
    public function updateProfile(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'min:8|nullable|confirmed',
    ]);

    $user = User::findOrFail($id);
    if($request->password==0){
        $user->update([$user->name=$request->name,
        $user->email=$request->email]);
    }
    else
    $user->update($request->all());

    return redirect()->route('user.profile', ['id' => $user->id]);
}

    public function getOrders($id)
    {
        $user = User::find($id);
        $orders = Order::where('user_id', $user->id)
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('user.order_history', compact('user', 'orders'));
    }

}


