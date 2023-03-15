<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\LandingPageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(LandingPageController::class)->group(function(){
    Route::get('/', 'index');
});
Route::controller(SystemController::class)->group(function(){
    Route::get('/system/analytics', 'analytics');
    Route::get('/system/reservation', 'reservation');
    Route::get('/system/rooms', 'rooms');
    Route::get('/system/accommodations', 'accommodations');
    Route::get('/system/accounts', 'accounts');
    Route::get('/system/login', 'login');
});
