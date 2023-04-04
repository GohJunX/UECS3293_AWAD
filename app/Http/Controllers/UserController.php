<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile($id){
        $user = User::find($id);
        // dd($user->name);
        $orders = Order::where('user_id', $user->id)
                        ->orderBy('created_at','desc')
                        ->take(5)
                        ->get();
        if($orders->count()==0)
            $orders=null;
        return view('user.profile', compact('user', 'orders'));
    }
    
}

