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
    Route::get('/login', 'login');
    Route::get('/register', 'register');
    Route::get('/reservation/step1', 'reservationStep1');
    Route::get('/reservation/step2', 'reservationStep2');
    Route::get('/reservation/step3', 'reservationStep3');

});
Route::controller(SystemController::class)->group(function(){
    Route::get('/system/analytics', 'analytics');
    Route::get('/system/reservation', 'reservation');
    Route::get('/system/rooms', 'rooms');
    Route::get('/system/accommodations', 'accommodations');
    Route::get('/system/accounts', 'accounts');
    Route::get('/system/home', 'home');
    // Route::get('/system/login', 'login');
});
