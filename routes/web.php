<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.welcome');
// });

Route::get('/', [HomePageController::class, 'homepage'])->name('frontend.homepage');

Route::get('/admin/login', [LoginController::class, 'loginpage'])->name('admin.login.page');
Route::post('/admin/login', [LoginController::class, 'adminlogin'])->name('admin.login');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
