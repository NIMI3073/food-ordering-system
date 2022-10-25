<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Models\Order;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;


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

Route::get('/',fn()=>view('index'));

Route::get('/about', fn()=>view('about'));
Route::get('/order', fn()=>view('order'));

Route::get('/menu', fn()=>view('menu'));
Route::get('/menu-gallery', fn()=>view('menu-gallery'));
Route::get('/contact', fn()=>view('contact'));
Route::get('/reservation', fn()=>view('reservation'));
Route::get('/register',fn()=>view('register'));
Route::get('/payment',fn()=>view('payment'));
Route::get('/order',fn()=>view('order'));
Route::post('/register',[UserController::class,'store']);
Route::post('/contact',[ContactController::class,'store']);

//dashboard routes//

Route::prefix('admin')->group(function(){
Route::get('/order-list', fn()=>view('super-admin.order-list'));
Route::get('/order-list', fn()=>view('super-admin.user-list'));
Route::get('/add-menu', fn()=>view('super-admin.add-menu'));
Route::get('/login',fn()=>view('login'));
Route::post('/add-menu',[MenuController::class,'store']);



});

// __ cart dashboard||

Route::prefix('cart')->group(function(){
    Route::get('cart',fn()=>view('cart-dashboard.cart'));

});