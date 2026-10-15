<?php
use App\Controllers\AuthController;
use App\Controllers\PostsController;
use App\Controllers\UsersController;
use App\Route;

Route::get('/', ['App\\Controllers\\PublicController', 'index']);

Route::get('/us', ['App\\Controllers\\PublicController', 'us']);

Route::get('/techno', ['App\\Controllers\\PublicController', 'techno']);

Route::get('/test', ['App\\Controllers\\PublicController', 'test']);

Route::get('/form', ['App\\Controllers\\PublicController', 'form']);
Route::post('/form', ['App\\Controllers\\PublicController', 'answer']);

Route::get('/admin/posts', [PostsController::class, 'index']);
Route::get('/admin/posts/create', [PostsController::class, 'create']);
Route::post('/admin/posts', [PostsController::class, 'store']);
Route::get('/admin/posts/view', [PostsController::class, 'view']);
Route::get('/admin/posts/edit', [PostsController::class, 'edit']);
Route::post('/admin/posts/edit', [PostsController::class, 'update']);
Route::get('/admin/posts/delete', [PostsController::class, 'delete']);

Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/admin/users', [UsersController::class, 'index']);
Route::get('/admin/users/view', [UsersController::class, 'view']);
Route::get('/admin/users/edit', [UsersController::class, 'edit']);
Route::post('/admin/users/edit', [UsersController::class, 'update']);
Route::get('/admin/users/delete', [UsersController::class, 'delete']);