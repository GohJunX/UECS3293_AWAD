<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
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
})->name('home');
Route::get('profile/{id}', [UserController::class, 'showProfile'])->name('user.profile');
Route::get('profile/{id}/editProfile', [UserController::class, 'editProfile'])->name('user.profile.edit');
Route::put('profile/{id}/updateProfile', [UserController::class, 'updateProfile'])->name('user.profile.update');
Route::get('profile/{id}/order_history',[UserController::class,'getOrders'])->name('user.order_history');