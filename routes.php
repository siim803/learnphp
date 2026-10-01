<?php

use App\Controllers\PublicController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);
Route::get('/', [PublicController::class, 'index']);
Route::get('/us', [PublicController::class, 'us']);
Route::get('/test', [PublicController::class, 'test']);
Route::post('/form', [PublicController::class, 'form']);
Route::get('/answer', [PublicController::class, 'answer']);