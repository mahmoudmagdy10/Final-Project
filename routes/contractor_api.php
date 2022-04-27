<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractorAuth\ContractorAuthController;
use App\Http\Controllers\ContractorAuth\PagesController;

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
    Route::get('/logout/{id}', [ContractorAuthController::class, 'logout'])->name('contractor.logout')->middleware('auth_user:contractor-api');

    Route::get('/homepage/{id}', [PagesController::class, 'homepage'])->name('contractor.homepage');
    Route::get('/my_projects/{id}', [PagesController::class, 'my_projects'])->name('contractor.my_projects');
    Route::get('/explor/{id}', [PagesController::class, 'explor'])->name('contractor.explor');
    Route::get('/details/{id}', [PagesController::class, 'details'])->name('contractor.details');
    Route::get('/profile/{id}', [PagesController::class, 'profile'])->name('contractor.profile');
    Route::get('/edit/{id}', [PagesController::class, 'edit'])->name('contractor.edit');
    Route::post('/update/{id}', [PagesController::class, 'update'])->name('contractor.update');


});