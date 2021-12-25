<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\KasirController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\ProductController;

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

Route::group(['middleware' => 'api'],function($router){
    Route::post('login',[AuthController::class,'Login']);
    Route::post('register',[AuthController::class,'Register']);
    Route::post('logout',[AuthController::class,'Logout']);
    Route::post('verify',[AuthController::class,'EmailVerified']);
    Route::get('resend',[AuthController::class,'ResendOTP']);
    Route::post('forgot',[AuthController::class,'forgotPassword']);
    Route::post('check-password',[AuthController::class,'checkOldPassword']);
    Route::post('change-password',[AuthController::class,'changePassword']);

    //kasir
    Route::group(['prefix' => 'kasir'],function($router){
        Route::get('',[KasirController::class,'getKasir']);
        Route::get('{id}',[KasirController::class,'getKasirById']);
        Route::post('add',[KasirController::class,'addKasir']);
        Route::post('accept',[KasirController::class,'acceptKasir']);
        Route::post('decline',[KasirController::class,'declineKasir']);
    });

    // Supplier
    Route::group(['prefix' => 'supplier'],function($router){
        Route::get('',[SupplierController::class,'index']);
        Route::post('store',[SupplierController::class,'store']);
        Route::get('{id}',[SupplierController::class,'show']);
        Route::post('update',[SupplierController::class,'update']);
        Route::post('destroy',[SupplierController::class,'destroy']);
    });

    // Product
    Route::group(['prefix' => 'product'],function($router){
        Route::get('',[ProductController::class,'index']);
        Route::get('category',[ProductController::class,'getCategory']);
        Route::get('size',[ProductController::class,'getSize']);
        Route::post('store',[ProductController::class,'store']);
        Route::get('{id}',[ProductController::class,'show']);
        Route::post('destroy',[ProductController::class,'destroy']);
    });
    
});
