<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/pendaftaran', [PendaftaranController::class, 'register']);
Route::post('/welcome', [PendaftaranController::class, 'welcome']);

Route::get('/master', function ()
{
    return view('layouts.master');
});
