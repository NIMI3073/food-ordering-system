<?php

use App\Http\Controllers\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


    Route::post('/order', [OrderController::class, 'store']);
    Route::post('/register',[UserController::class,'store']);
    Route::post('/contact',[ContactController::class,'store']);
    Route::get('/order', [OrderController::class, 'index']);
    Route::get('/menu', [MenuController::class, 'menuList']);
    Route::post('/add-menu',[MenuController::class,'store']);
    Route::post('add-blog', [BlogController::class, 'store']);
    Route::post('blog-single', [BlogController::class, 'postBlogComment']);
    Route::put('edit-content',[BlogController::class,'editContent']);
    Route::middleware(['auth:sanctum'])->group(function(){
    // Route::post('menu-gallery',[MenuController::class,'postCart'])->name('post-cart');
    Route::post('carts', [CartController::class, 'store'])->name('cart.store');
  
   
    });
    
   
   
    



