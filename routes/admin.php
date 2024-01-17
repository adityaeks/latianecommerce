<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

// admin route
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


// Profile Route
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::get('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
