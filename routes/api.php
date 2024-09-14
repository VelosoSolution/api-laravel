<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Route::post('login', AuthenticatedSessionController::class)->name('login');
//Route::post('logout', LogoutSessionController::class)->name('logout');
//Route::apiResource('users', OrcamentoController::class);
Route::apiResource('user',UserController::class);