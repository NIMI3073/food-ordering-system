<?php

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ContactController;

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
Route::get('/contact', fn()=>view('contact'));
Route::get('/reservation', fn()=>view('reservation'));
Route::get('/register',fn()=>view('register'));
Route::get('/payment',fn()=>view('payment'));
Route::post('/register',[UserController::class,'store']);
Route::post('/contact',[ContactController::class,'store']);
Route::get('/dashboard',fn()=>view('dashboard'));
Route::get('/login',[AuthController::class, 'loginForm'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });






// Admin dashboard routes//

Route::prefix('admin')->middleware(['auth:web'])->group(function(){    
    Route::get('/user-list',fn()=>view('super-admin.user-list'));
    Route::get('/order-list', fn()=>view('super-admin.order-list'));
    // Route::get('/dashboard',fn()=>view('super-admin.dashboard'));



    


});
