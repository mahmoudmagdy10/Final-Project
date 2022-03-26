<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractorAuth\ContractorAuthController;

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

Route::namespace('ContractorAuth')->group(function () {
    
    Route::get('/contractor-register', [ContractorAuthController::class, 'register'])->name('contractor.register');
    Route::post('/store', [ContractorAuthController::class, 'store'])->name('contractor.storeInfo');
    Route::post('logout', [ContractorAuthController::class, 'logout'])->name('contractor.logout')->middleware('auth_guard:contractor-api');
    Route::get('/homepage', [ContractorAuthController::class, 'homepage'])->name('contractor.homepage')->middleware('auth_guard:contractor-api');


});
Route::prefix('contractor')->middleware('auth:contractor-api')->group(function () {
    Route::post('profile', function () {
        return 'Only Authentecated Users Can reach this';
    });
});