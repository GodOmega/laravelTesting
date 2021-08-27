<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return 'About';
});

Route::view('profile', 'profile');

Route::post('profile', [\App\Http\Controllers\ProfileController::class, 'upload']);
