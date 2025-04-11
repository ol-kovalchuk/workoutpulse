<?php

use App\Http\Controllers\VitalSignsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\WorkoutTrackerController;
use App\Http\Controllers\HealthTestsController;
use App\Http\Controllers\ProfileController;

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
Route::get('/health-tests', [HealthTestsController::class, 'index'])->name('health.tests')
->middleware('guestRestrict');
Route::get('/health-tests/body-mass-index', [HealthTestsController::class, 'bmiForm'])->name('health-tests.bmi')
->middleware('guestRestrict');
Route::post('/health-tests/body-mass-index', [HealthTestsController::class, 'bmiStore'])->name('health-tests.bmi.store');
Route::get('/health-tests/ruffier-test', [HealthTestsController::class, 'ruffierTestForm'])
->name('health-tests.ruffier')->middleware('guestRestrict');;
Route::post('/health-tests/ruffier-test', [HealthTestsController::class, 'ruffierTestStore'])->name('health-tests.ruffier.store');
Route::get('health-tests/results', [HealthTestsController::class, 'getResults'])->name('health-tests.results')
->middleware('guestRestrict');;

// Vital signs section
Route::get('/vital-signs', [VitalSignsController::class, 'index'])->name('vital-signs')
->middleware('guestRestrict');;
Route::post('/vital-signs', [VitalSignsController::class, 'vitalSignsStore'])->name('vital-signs.store');
Route::get('/vital-signs/measurements', [VitalSignsController::class, 'measurements'])
->name('vital-signs.measurements')->middleware('guestRestrict');;

// Profile section
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
