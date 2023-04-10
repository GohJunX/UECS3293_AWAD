<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
Use Cookie;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user) {
        
        $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|min:8', 
            ]);
        

    if ($user->role == 'user') {
        //remember me
                if($request->has('remember')){
                    Cookie::queue('user',$request->email,1440);
                    Cookie::queue('userpwd',$request->password,1440);
                }  
            
                else if(!$request->has('remember')){
                    Cookie::queue(Cookie::forget('user'));
                    Cookie::queue(Cookie::forget('userpwd'));
                }
        return redirect('/home');

        }
    

    }


    // public function adminLogin(Request $request)
    // {
    // $this->validate($request, [
    //     'email' => 'required|email',
    //     'password' => 'required|min:8'
    // ]);

    // if(user->role=='admin'){
    //     redirect('/');

    // }
    // else if(user->role=='user'){
    //     redirect('/home');
    // }
 
    // }
}