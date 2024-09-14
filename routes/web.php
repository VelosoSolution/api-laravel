<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index']); // GET all users
Route::get('/user/{id}', [UserController::class, 'show']); // GET user by ID
Route::post('/user', [UserController::class, 'store']); // POST create new user
Route::put('/user/{id}', [UserController::class, 'update']); // PUT update user
Route::delete('/user/{id}', [UserController::class, 'destroy']); // DELETE user
