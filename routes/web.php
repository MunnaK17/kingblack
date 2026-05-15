<?php

use App\Http\Controllers\PendaftarController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return 'Laravel hidup';
});

Route::get('/', function () {
    return view('pages.home');
});

Route::post('/pendaftaran', [PendaftarController::class, 'store'])->name('pendaftaran.store');
