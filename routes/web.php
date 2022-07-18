<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [UserController::class, 'index']);
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('edit');
Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store'])->name('create');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/users', [UserController::class, 'index'])->name('home');
Route::delete('/users/{user}', [UserController::class, 'destroy']);

