<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DataKasirController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => 'api', 'prefix' => 'auth'],function($router){
    Route::post('login',[AuthController::class,'Login']);
    Route::post('logout',[AuthController::class,'Logout']);
});

Route::group(['middleware' => 'api', 'prefix' => 'admin'],function($router){

    // data kasir
    Route::get('data-kasir',[DataKasirController::class,'kasir']);
    Route::get('kasir/{id}',[DataKasirController::class,'getKasirById']);
});