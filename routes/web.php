<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::view('/', 'halaman_depan/index');
route::get('/sesi', [AuthController::class, 'index'])->name('auth');
Route::post('/sesi', [AuthController::class, 'login'])->name('auth.login');

Route::middleware(['auth', 'check_role:user'])->group(function () {
    Route::get('/poinakses/user/dashboard', [UserController::class, 'index'])
        ->name('user');
});

Route::middleware(['auth', 'check_role:admin'])->group(function () {
    Route::get('/poinakses/admin/dashboard', [AdminController::class, 'index'])
        ->name('admin');
});

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/sesi');
})->name('logout');
