<?php

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResetPasswordController;
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
// Route::get('/payment',fn()=>view('payment'));
Route::post('/register',[UserController::class,'store']);
Route::post('/contact',[ContactController::class,'store']);
Route::get('login1',fn()=>view('login1'));
Route::post('/login',[AuthController::class,'login']);
Route::get('/login',[AuthController::class, 'loginForm'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('web')->name('logout');


Route::get('email-token',[ResetPasswordController::class,'showEmailTokenForm'])->name('email-token.get');
Route::post('email-token',[ResetPasswordController::class,'tokenForm'])->name('email-token');
Route::get('forget-password', [ResetPasswordController::class, 'showForgotPasswordForm'])->name('forget-password');
Route::post('forget-password', [ResetPasswordController::class, 'submitForgotPasswordForm'])->name('forget-password.post');
Route::get('reset-password', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset-password.get');
Route::post('reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset-password');


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
    Route::get('payment/process',[CartController::class,'paymentProcess'])->name('payment/process');
    Route::get('payment',[CartController::class,'paymentStatus'])->name('payment');

    Route::prefix('cart')->group(function(){
        // Route::get('/cart', [CartController::class, 'deleteItem']);
        
        Route::get('cart',[CartController::class,'cartItems'])->name('cart-items');
        Route::get('/delete-item',[CartController::class,'destroy'])->name('delete-item');
        Route::post('increase-item',[CartController::class,'increaseQuantity'])->name('increase-item');
       
    });
});
