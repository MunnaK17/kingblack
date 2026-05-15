<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return 'Laravel hidup';
});

Route::get('/', function () {
    return view('pages.home');
});
