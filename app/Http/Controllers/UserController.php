<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile($id){
        $user = User::find($id);
        $orders = Order::where('user_id', $user->id)->get();
        if($orders->count()==0)
            $orders=null;
        return view('profile/'.$user->id, compact('user', 'orders'));
    }
    
}

