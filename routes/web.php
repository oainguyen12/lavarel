<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SinhVienController;

// Hiển thị form đăng nhập
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Chỉ cho admin truy cập trang /sinhvien
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/sinhvien', [SinhVienController::class, 'index'])->name('sinhvien.index');
    Route::resource('sinhvien', SinhVienController::class)->except(['index']);
});
