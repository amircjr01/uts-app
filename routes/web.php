<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileUploadController;
use App\Http\Middleware\Authenticate;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login-form');
Route::post('/login', [LoginController::class, 'login'])->name('login-post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', [DashboardController::class, 'index'])->name('welcome-page')->middleware(Authenticate::class);
Route::get('/penjualan', [PenjualanController::class, 'index'])->name("list-penjualan")->middleware(Authenticate::class);
Route::get('/penjualan/create', [PenjualangController::class, 'create'])->name("create-penjualan")->middleware(Authenticate::class);
Route::post('/penjualan/store', [PenjualanController::class, 'store'])->name("post-penjualan")->middleware(Authenticate::class);
Route::get('/penjualan/{penjualan}/edit', [PenjualanController::class, 'edit'])->name("edit-penjualan")->middleware(Authenticate::class);
Route::put('/penjualan/{penjualan}/update', [PenjualanController::class, 'update'])->name("update-penjualan")->middleware(Authenticate::class);
Route::delete('/penjualan/{penjualan}/delete', [PenjualanController::class, 'delete'])->name("delete-penjualan")->middleware(Authenticate::class);
Route::get('/profile', [FileUploadController::class, 'FormAvatar'])->name('profile')->middleware(Authenticate::class);
Route::put('/profile/avatar/{user}', [FileUploadController::class, 'store'])->name('profile-store')->middleware(Authenticate::class);
