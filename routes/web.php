<?php

use App\Http\Controllers\OrderController;
use App\Models\Order;
use Illuminate\Contracts\Cache\Store;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', fn()=>view('index'));
Route::get('/about', fn()=>view('about'));
Route::get('/order', fn()=>view('order'));
Route::get('/order-list', fn()=>view('order-list'));
Route::get('/menu', fn()=>view('menu'));
Route::get('/contact', fn()=>view('contact'));
Route::get('/reservation', fn()=>view('reservation'));


// Route::post('order',[OrderController::class,'store']);


// Route::get('/indexs', fn()=>view('indexs'));
