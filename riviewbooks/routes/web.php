<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\GenresController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/pendaftaran', [PendaftaranController::class, 'register']);
Route::post('/welcome', [PendaftaranController::class, 'welcome']);



// create

Route::get('/category/create', [GenresController::class, 'create']);
Route::post('/category', [GenresController::class, 'store']);

// read
Route::get('/category', [GenresController::class, 'index']);
Route::get('/category/{id}', [GenresController::class, 'show']);

// update
Route::get('/category/{id}/edit', [GenresController::class, 'edit']);
Route::put('/category/{id}', [GenresController::class, 'update']);

// delete
Route::delete('/category/{id}', [GenresController::class, 'destroy']);

