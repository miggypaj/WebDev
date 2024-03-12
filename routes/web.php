<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

// Registration route
Route::post('register', [RegistrationController::class, 'register']);


// Login routes


Route::post('login', [LoginController::class, 'login']);

