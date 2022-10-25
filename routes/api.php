<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
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
    // Route::post('/add-menu',[MenuController::class,'store']);
    
    // Route::get('/menu',fn()=>view('menu'));
   
    



