<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('store_activity',[\App\Http\Controllers\ActivityController::class,'store']);
Route::get('signin',[\App\Http\Controllers\UserController::class,'sign_in']);
Route::get('signup',[\App\Http\Controllers\UserController::class,'store']);

