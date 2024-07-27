<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;

Route::get('/', [PenjualanController::class, 'index']);
Route::post('/add', [PenjualanController::class, 'add']);
