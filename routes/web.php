<?php

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

Route::get('/', function () {
    return view('main');
});

Route::get('/main', function () {
    return view('main');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Route::get('userinfo',[\App\Http\Controllers\UserController::class,'store']);

Route::get('userinfo',[\App\Http\Controllers\UserController::class,'show'])->name('userinfo');
Route::get('employeesInformation',[\App\Http\Controllers\UserController::class,'index'])->name('employeesInformation');


Route::get('ActivityReg',[\App\Http\Controllers\ActivityController::class,'create'])->name('ActivityReg');
Route::post('ActivityStore',[\App\Http\Controllers\ActivityController::class,'store'])->name('ActivityStore');
Route::get('employeesActivity',[\App\Http\Controllers\ActivityController::class,'index'])->name('employeesActivity');


Route::get('Group_Activities',[\App\Http\Controllers\GroupActivityController::class,'index'])->name('Group_Activities');
Route::get('GroupActivityReg',[\App\Http\Controllers\GroupActivityController::class,'create'])->name('GroupActivityReg');
Route::post('GroupActivityStore',[\App\Http\Controllers\GroupActivityController::class,'store'])->name('GroupActivityStore');

require __DIR__.'/auth.php';
