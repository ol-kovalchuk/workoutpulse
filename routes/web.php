<?php

use App\Http\Controllers\VitalSignsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\WorkoutTrackerController;
use App\Http\Controllers\WorkoutProgramsController;
use App\Http\Controllers\HealthTestsController;
use App\Http\Controllers\ProfileController;

// Static pages
Route::controller(StaticPagesController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contacts', 'contacts')->name('contacts');
});

// Middleware for guest users
Route::middleware('guestRestrict')->group(function() {
    // Authentication controller
    Route::controller(AuthenticationController::class)->group(function() {
        Route::post('/logout', 'logout')->name('logout');
    });
    //Workout tracker controller
    Route::controller(WorkoutTrackerController::class)->group(function() {
        Route::get('/workout-tracker', 'index')->name('workout_tracker');
        Route::get('/workout-tracker/general-workout', 'getGeneralWorkout')->name('general_workout');
        Route::post('/workout-tracker/general-workout', 'storeGeneralWorkout')->name('general_workout.store');
        Route::get('/workout-tracker/results', 'show')->name('workout.results');
    });
    //Workout programs controller
    Route::controller(WorkoutProgramsController::class)->group(function() {
        Route::get('/workout-programs/pushups', 'getPushupsProgram')->name('pushups_program');
        Route::get('/workout-programs/pullups', 'getPullupsProgram')->name('pullups_program');
        Route::get('/workout-programs/squats', 'getSquatsProgram')->name('squats_program');
        Route::get('/workout-programs/abs', 'getAbsProgram')->name('abs_program');
    });
    // Health tests controller
    Route::controller(HealthTestsController::class)->group(function() {
        Route::get('/health-tests', 'index')->name('health_tests');
        Route::get('/health-tests/body-mass-index', 'getBmiForm')->name('health_tests.bmi');
        Route::post('/health-tests/body-mass-index', 'storeBmi')->name('health_tests.bmi.store');
        Route::get('/health-tests/ruffier-test', 'getRuffierTestForm')->name('health_tests.ruffier');
        Route::post('/health-tests/ruffier-test', 'storeRuffierTest')->name('health_tests.ruffier.store');
        Route::get('health-tests/results', 'getResults')->name('health_tests.results');
    });
    // Vital signs controller
    Route::controller(VitalSignsController::class)->group(function() {
        Route::get('/vital-signs', 'index')->name('vital_signs');
        Route::post('/vital-signs', 'storeVitalSigns')->name('vital_signs.store');
        Route::get('/vital-signs/measurements', 'getMeasurements')->name('vital_signs.measurements');
    });
    // Profile controller
    Route::controller(ProfileController::class)->group(function() {
        Route::get('/profile', 'index')->name('profile');
    });
});

// Middleware for logged in users
Route::middleware('authRestrict')->group(function() {
    // Authentication controller
    Route::controller(AuthenticationController::class)->group(function() {
        Route::get('/login', 'loginForm')->name('login.form');
        Route::post('/login', 'login')->name('login');
        Route::get('/signup', 'signupForm')->name('signup.form');
        Route::post('/signup', 'signup')->name('signup');
    });
});
