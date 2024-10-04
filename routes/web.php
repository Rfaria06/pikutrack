<?php

use App\Livewire\Dashboard;
use App\Livewire\Expenses;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/expenses', Expenses\ExpensesList::class)->name('expenses.list');
    Route::get('/expenses/{expense}', Expenses\Show::class)->name('expenses.show');
});
