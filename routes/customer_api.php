<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerAuth\TestController;
use App\Http\Controllers\CustomerAuth\AuthController;

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

Route::namespace('CustomerAuth')->group(function () {

    Route::get('/register', [AuthController::class, 'register'])->name('customer.register');
    Route::post('/store', [AuthController::class, 'store'])->name('customer.storeInfo');
    Route::get('/homepage', [AuthController::class, 'homepage'])->name('customer.homepage');

});
Route::prefix('customer')->middleware('auth_guard:customer-api')->group(function () {
    Route::post('profile', function () {
        return 'Only Authentecated Users Can reach this';
    });
});