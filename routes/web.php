<?php

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ReservationController;
use App\Models\Blog;
use App\Models\Cart;
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

Route::get('/',fn()=>view('index'));
// Route::get('/',function(){
//     // to display total number of items added to cart behind the cart icon
//    return view('index')->with([
//         'cartCount' =>auth()->check() ? Cart::where('status', 'in_cart')->where('user_id', auth()->id())->count() : 0,
//     ]);
// });

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
Route::post('/reservation',[ReservationController::class,'store']);
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
Route::get('/order-list',[OrderController::class,'index']);
Route::get('/user-list',[UserController::class,'userList']);
Route::get('/cart-list',[CartController::class,'cartList']);
Route::get('/payment-list',[CartController::class,'paymentList']);
Route::get('/payment-info',[CartController::class,'paymentInfo'])->name('payment-info');
Route::get('/add-menu', fn()=>view('super-admin.add-menu'));
Route::get('/add-blog', fn()=>view('super-admin.add-blog'));
Route::get('blog-single', fn()=>view('super-admin.blog-single'));
// Route::get('blog-single',[BlogController::class,'getBlogComment']);
Route::post('blog-single',[BlogController::class,'postBlogComment']);
Route::post('/add-menu',[MenuController::class,'store']);
Route::post('add-blog',[BlogController::class,'store']);
Route::get('edit-content',[BlogController::class,'editContentForm'])->name('edit-content');
Route::put('edit-content',[BlogController::class,'editContent'])->name('edit-content');
Route::get('delete-content',[BlogController::class,'deleteContent'])->name('delete-content');
Route::get('blog',[BlogController::class,'showBlog']);
Route::get('blog-list',[BlogController::class,'getBlogList'])->name('blog-list');
});

// __ cart dashboard||
Route::middleware(['auth:web'])->group(function(){
    Route::get('/menu-gallery',[MenuController::class,'menuGallery']);
    // Route::post('/menu-gallery',[CartController::class,'store'])->name('post-cart');
    Route::get('payment/process',[CartController::class,'paymentProcess'])->name('payment/process');
    Route::get('payment',fn()=>view('payment'))->name('payment');
    Route::get('userPaymentInfo',[CartController::class,'paymentStatusInfo'])->name('userPaymentInfo');

    Route::prefix('cart')->group(function(){
        // Route::get('/cart', [CartController::class, 'deleteItem']);
        
        Route::get('cart',[CartController::class,'cartItems'])->name('cart-items');
        Route::get('/delete-item',[CartController::class,'destroy'])->name('delete-item');
        Route::post('increase-item',[CartController::class,'increaseQuantity'])->name('increase-item');
       
    });
});
