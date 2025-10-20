<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPendudukController;
use App\Http\Controllers\DashboardProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/auth/login');
});

Route::get('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/login', [AuthController::class, 'login_action']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/kelola-penduduk', [DashboardPendudukController::class, 'index']);
Route::get('/dashboard/profile', [DashboardProfileController::class, 'index']);