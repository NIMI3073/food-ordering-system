<?php

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Redirect;


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

Route::get('/index',fn()=>view('index'));
Route::get('/about', fn()=>view('about'));
Route::get('/order', fn()=>view('order'));
Route::get('/menu', fn()=>view('menu'));
Route::get('/contact', fn()=>view('contact'));
Route::get('/reservation', fn()=>view('reservation'));
Route::get('/register',fn()=>view('register'));
Route::get('/payment',fn()=>view('payment'));
Route::post('/register',[UserController::class,'store']);
Route::post('/contact',[ContactController::class,'store']);

Route::post('/login',[AuthController::class,'login']);
Route::get('/login',[AuthController::class, 'loginForm'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('web')->name('logout');

//dashboard routes//

Route::prefix('admin')->group(function(){
Route::get('/order-list', fn()=>view('super-admin.order-list'));
Route::get('/order-list', fn()=>view('super-admin.user-list'));
Route::get('/add-menu', fn()=>view('super-admin.add-menu'));
Route::post('/add-menu',[MenuController::class,'store']);
});

// __ cart dashboard||
Route::middleware(['auth:web'])->group(function(){
    Route::get('/menu-gallery',[MenuController::class,'menuGallery']);
    // Route::post('/menu-gallery',[CartController::class,'store'])->name('post-cart');

    Route::prefix('cart')->group(function(){
        // Route::get('/cart', [CartController::class, 'deleteItem']);
        
        Route::get('cart',[CartController::class,'cartItems'])->name('cart-items');
        Route::get('/delete-item',[CartController::class,'deleteItem'])->name('delete-item');
    });
});
// });