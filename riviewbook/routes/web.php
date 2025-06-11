<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/sanberbook', [DashboardController::class, 'home']);
Route::get('/pendaftaran', [FormController::class, 'register']);
Route::post('/selamat datang', [FormController::class, 'welcome']);



Route::get('/', function () {
    return view('sanberbook');
});
