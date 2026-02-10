<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('halaman-utama');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard-page');