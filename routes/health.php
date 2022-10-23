<?php

use App\Http\Controllers\SystemHealthController;
use Illuminate\Support\Facades\Route;


Route::get('/health/', [SystemHealthController::class, 'index']);
Route::get('/health/database', [SystemHealthController::class, 'database']);
