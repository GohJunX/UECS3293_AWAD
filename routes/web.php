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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['adminAuthenticate']], function(){
    Route::get('/dashboard',function(){
        return view('home');
    });
    // Admin Dashboard
Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

// Products Management
Route::get('/admin/products', [ProductController::class,'index'] )->name('admin.products.index');
Route::get('/admin/products/create',[ProductController::class,'create'])->name('admin.products.create');
Route::post('/admin/products', [ProductController::class,'store'])->name('admin.products.store');
Route::put('/admin/products/{product}/edit', [ProductController::class,'edit'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [ProductController::class,'update'])->name('admin.products.update');
Route::delete('/admin/products/{product}', [ProductController::class,'destroy'])->name('admin.products.destroy');

// Orders Management
Route::get('/admin/orders', [OrderController::class,'index'])->name('admin.orders.index');
Route::get('/admin/orders/{order}', [OrderController::class,'show'])->name('admin.orders.show');
Route::get('/admin/orders/{order}/edit',[OrderController::class,'edit'])->name('admin.orders.edit');
Route::put('/admin/orders/{order}/update_status', [OrderController::class,'updateStatus'])->name('admin.orders.update_status');
});


Route::get('/cart', [CartController::class, 'showCart']);


Route::get('/product/{id}', [ProductController::class, 'show']);






