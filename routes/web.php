<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\WorkoutTrackerController;
use App\Http\Controllers\HealthTestsController;

// Static pages
Route::get('/', [StaticPagesController::class, 'index'])->name('home');
Route::get('/about', [StaticPagesController::class, 'about'])->name('about');
Route::get('/contacts', [StaticPagesController::class, 'contacts'])->name('contacts');

// Authentication section
Route::get('/login', [AuthenticationController::class, 'loginForm'])->name('login.form')
->middleware('authRestrict');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/signup', [AuthenticationController::class, 'signupForm'])->name('signup.form')
->middleware('authRestrict');
Route::post('/signup', [AuthenticationController::class, 'signup'])->name('signup.store');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout')
->middleware('guestRestrict');

// Workout tracking section
Route::get('/workout-tracker', [WorkoutTrackerController::class, 'index'])->name('workout.tracker')
->middleware('guestRestrict');
Route::post('/workout-tracker', [WorkoutTrackerController::class, 'store'])->name('workout.store');
Route::get('/workout-tracker/results', [WorkoutTrackerController::class, 'show'])->name('workout.results')
->middleware('guestRestrict');

// Health Tests section
Route::get('/health-tests', [HealthTestsController::class, 'index'])->name('health.tests');
Route::get('/health-tests/body-mass-index', [HealthTestsController::class, 'bmiForm'])->name('health-tests.bmi');
Route::post('/health-tests/body-mass-index', [HealthTestsController::class, 'bmiStore'])->name('health-tests.bmi.store');
Route::get('/health-tests/ruffier-test', [HealthTestsController::class, 'ruffierTestForm'])->name('health-tests.ruffier');
Route::post('/health-tests/ruffier-test', [HealthTestsController::class, 'ruffierTestStore'])->name('health-tests.ruffier.store');
Route::get('health-tests/results', [HealthTestsController::class, 'getResults'])->name('health-tests.results');
