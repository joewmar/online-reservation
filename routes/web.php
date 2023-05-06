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
    Route::get('/about', 'about');
    Route::get('/accommodation', 'accommodation');
    Route::get('/contact', 'contact');
    Route::get('/login', 'login');
    Route::get('/register', 'register');
    Route::get('/profile', 'profile');
    Route::get('/myreservation', 'myreservation');
    Route::get('/reservation/step1', 'reservationStep1');
    Route::get('/reservation/step2', 'reservationStep2');
    Route::get('/reservation/step3', 'reservationStep3');

});
Route::controller(SystemController::class)->group(function(){
    Route::get('/system/analytics', 'analytics');
    Route::get('/system/reservation', 'reservation');
    Route::get('/system/rooms', 'rooms');
    Route::get('/system/tour', 'tour');
    Route::get('/system/accounts', 'accounts');
    Route::get('/system/home', 'home');
    Route::get('/system/announcement', 'announcement');
    Route::get('/system/announcement/messages', 'messages');
    Route::get('/system/feedback', 'feedback');
    Route::get('/system/webcontent', 'webcontent');
    Route::get('/system/settings', 'settings');
    Route::get('/system/profile', 'profile');
    Route::get('/system/login', 'login');
});
