<?php

use App\Livewire\Dashboard;
use App\Livewire\Expenses;
use App\Livewire\Expenses\Create;
use App\Livewire\Expenses\Edit;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::prefix('expenses')->name('expenses.')->group(function () {
        Route::get('/', Expenses\ExpensesList::class)->name('index');
        Route::get('/create', Create::class)->name('create');
        Route::get('/{expense}', Expenses\Show::class)->name('show');
        Route::get('/{expense}/edit', Edit::class)->name('edit');
    });
});
