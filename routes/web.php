<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\WorkoutTrackerController;

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

// Workout tracking section
Route::get('/workout-tracker', [WorkoutTrackerController::class, 'index'])->name('workout.tracker');
Route::post('/workout-tracker', [WorkoutTrackerController::class, 'store'])->name('workout.store');

