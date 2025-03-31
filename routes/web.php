<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;

Route::get('/', [StaticPagesController::class, 'index'])->name('home');
Route::get('/about', [StaticPagesController::class, 'about'])->name('about');
Route::get('/contacts', [StaticPagesController::class, 'contacts'])->name('contacts');

