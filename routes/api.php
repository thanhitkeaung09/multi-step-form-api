<?php

use App\Http\Controllers\AddOnController;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('user')->as(':user')->group(function(){
    Route::post(
        uri : '/',
        action: UserController::class
    )->name('user');

    Route::get(
        uri : '/',
        action: [UserController::class,'get'],
    )->name('user');

    Route::post(
        uri : '/update',
        action: [UserController::class,'update'],
    )->name('user');

    
});

Route::prefix('plan')->as(':plan')->group(function(){
    Route::post(
        uri : '/',
        action: PlanController::class
    )->name('user');

    Route::post(
        uri : '/update',
        action: [PlanController::class,'update']
    )->name('user');

    Route::get(
        uri : '/',
        action: [PlanController::class,'get']
    )->name('user');
});

Route::prefix('addon')->as(':addon')->group(function(){
    Route::post(
        uri : '/',
        action: AddOnController::class
    )->name('user');

    Route::get(
        uri : '/',
        action: [AddOnController::class,'get']
    )->name('user');

    Route::post(
        uri : '/update',
        action: [AddOnController::class,'update']
    )->name('user');


});

Route::prefix('finish')->as(':finish')->group(function(){
    Route::get(
        uri : '/',
        action: FinishController::class
    )->name('user');
});
