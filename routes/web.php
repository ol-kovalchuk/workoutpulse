<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\AuthenticationController;

// Static pages
Route::get('/', [StaticPagesController::class, 'index'])->name('home');
Route::get('/about', [StaticPagesController::class, 'about'])->name('about');
Route::get('/contacts', [StaticPagesController::class, 'contacts'])->name('contacts');

// Authentication section
Route::get('/login', [AuthenticationController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/signup', [AuthenticationController::class, 'signupForm'])->name('signup.form');
Route::post('/signup', [AuthenticationController::class, 'signup'])->name('signup.store');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

