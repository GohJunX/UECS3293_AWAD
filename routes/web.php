<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class,'index']);



Auth::routes();


// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['adminAuthenticate']], function(){
    // Route::get('/dashboard',function(){
    //     return view('home');
    // });
    // Admin Dashboard
Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

// Products Management
Route::get('/products', [ProductController::class,'index'] )->name('admin.products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('admin.products.create');
Route::post('/products', [ProductController::class,'store'])->name('admin.products.store');
Route::put('/products/{product}/edit', [ProductController::class,'edit'])->name('admin.products.edit');
Route::put('/products/{product}', [ProductController::class,'update'])->name('admin.products.update');
Route::delete('/products/{product}', [ProductController::class,'destroy'])->name('admin.products.destroy');

// Orders Management
Route::get('/orders', [OrderController::class,'index'])->name('admin.orders.index');
Route::get('/orders/{order}', [OrderController::class,'show'])->name('admin.orders.show');
Route::get('/orders/{order}/edit',[OrderController::class,'edit'])->name('admin.orders.edit');
Route::put('/orders/{order}/update_status', [OrderController::class,'updateStatus'])->name('admin.orders.update_status');
});


Route::get('/cart', [CartController::class, 'showCart'])->name('cart');





// Route::view('/home','home')->name('home');
Route::get('/menu', [MenuController::class,'menu'])->name('menu');
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('user.product');
Route::view("/order",'order');

Route::get('profile/{id}', [UserController::class, 'showProfile'])->name('user.profile');
Route::get('profile/{id}/editProfile', [UserController::class, 'editProfile'])->name('user.profile.edit');
Route::put('profile/{id}/updateProfile', [UserController::class, 'updateProfile'])->name('user.profile.update');
Route::get('profile/{id}/order_history',[UserController::class,'getOrders'])->name('user.order_history');
