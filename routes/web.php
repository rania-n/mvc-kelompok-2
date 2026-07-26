<?php

use App\Http\Controllers\SaranController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('/saran', [SaranController::class,'index']);
    Route::post('/saran', [SaranController::class, 'store']);

});

require __DIR__.'/settings.php';
