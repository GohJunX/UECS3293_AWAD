<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Admin Dashboard
Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

// Products Management
Route::get('/admin/products', 'ProductController@index')->name('admin.products.index');
Route::get('/admin/products/create',[ProductController::class,'create'])->name('admin.products.create');
Route::post('/admin/products', [ProductController::class,'store'])->name('admin.products.store');
Route::get('/admin/products/{product}', [ProductController::class,'show'])->name('admin.products.show');
Route::get('/admin/products/{product}/edit', [ProductController::class,'edit'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [ProductController::class,'update'])->name('admin.products.update');
Route::delete('/admin/products/{product}', [ProductController::class,'destroy'])->name('admin.products.destroy');

// Orders Management
Route::get('/admin/orders', [OrderController::class,'index'])->name('admin.orders.index');
Route::get('/admin/orders/{order}', [OrderController::class,'show'])->name('admin.orders.show');
Route::put('/admin/orders/{order}/update_status', [OrderController::class,'updateStatus'])->name('admin.orders.update_status');
