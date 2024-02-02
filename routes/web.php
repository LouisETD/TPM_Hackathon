<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RegistrationBinusianController;
use App\Http\Controllers\RegistrationNonBinusianController;
use App\Http\Controllers\AdminPanelController;

// HOME
Route::get('/', [HomeController::class, 'home'])->name('home');


// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


// LOGIN
Route::get('/login', [LoginController::class, 'login'])->name('login');


// TEAM REGISTRATION
Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');


// BINUSIAN REGISTRATION
Route::get('/registration-binusian', [RegistrationBinusianController::class, 'registrationBinusian'])->name('registration-binusian');


// NON-BINUSIAN REGISTRATION
Route::get('/registration-non-binusian', [RegistrationNonBinusianController::class, 'registrationNonBinusian'])->name('registration-non-binusian');


// ADMIN PANEL
Route::get('/admin-panel', [AdminPanelController::class, 'adminPanel'])->name('admin-panel');
