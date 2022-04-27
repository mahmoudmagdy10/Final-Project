<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerAuth\AuthController;
use App\Http\Controllers\CustomerAuth\PagesController;
use App\Http\Controllers\CustomerAuth\UploadsController;

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
    
    //pages
    Route::get('/homepage/{id}', [PagesController::class, 'homepage'])->name('customer.homepage');
    Route::get('/construction_style/{id}', [PagesController::class, 'construction_style'])->name('customer.construction_style')->middleware('auth_user:customer-api');
    Route::get('/my_projects/{id}', [PagesController::class, 'my_projects'])->name('customer.my_projects')->middleware('auth_user:customer-api');
    Route::post('/upload/{id}', [UploadsController::class, 'upload'])->name('customer.upload');
    Route::get('/logout/{id}', [AuthController::class, 'logout'])->name('customer.logout')->middleware('auth_user:contractor-api');



});