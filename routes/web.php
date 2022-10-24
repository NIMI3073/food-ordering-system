<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', fn()=>view('index'));
Route::get('/contact',fn()=>view('contact'));
Route::get('/about',fn()=>view('about'));
Route::get('/menu',fn()=>view('menu'));
Route::get('/order',fn()=>view('order'));
Route::get('/register',fn()=>view('register'));
Route::get('/cart',fn()=>view('cart'));
Route::get('/reservation',fn()=>view('reservation'));

// __ cart dashboard||
Route::prefix('cart')->group(function(){
 Route::get('/cart',fn()=>view('cart-dashboard.cart'));
});