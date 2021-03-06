<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicAuthController;

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
Route::namespace('Controllers')->group(function () {

    Route::get('/getLogin', [BasicAuthController::class, 'index'])->name('api.index');
    Route::post('/login', [BasicAuthController::class, 'login'])->name('api.login');


});