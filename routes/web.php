<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

