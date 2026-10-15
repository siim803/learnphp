<?php

use App\Controllers\PublicController;
use App\Controllers\PostsController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);
Route::get('/techno', [PublicController::class, 'techno']);
Route::get('/us', [PublicController::class, 'us']);
Route::get('/test', [PublicController::class, 'test']);
Route::get('/form', [PublicController::class, 'form']);
Route::post('/form', [PublicController::class, 'form']);
Route::get('/answer', [PublicController::class, 'answer']);

Route::get('/admin/posts', [PostsController::class, 'index']);
Route::get('/admin/posts/create', [PostsController::class, 'create']);
Route::post('/admin/posts', [PostsController::class, 'store']);