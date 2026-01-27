<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

// user authentication routes

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login'); 

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');

    // Reservation routes
Route::middleware('auth')->group(function () {

    Route::get('/reservation', function () {
        return view('reservation');
    });

    Route::post('/reservation', [ReservationController::class, 'store']);

    Route::get('/my-bookings', [ReservationController::class, 'myBookings']);
});