<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'], function () {
    Route::get('/dashboard')->name('dashboard');
});
