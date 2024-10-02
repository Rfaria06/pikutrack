<?php

use App\Livewire\Dashboard;
use App\Livewire\Expenses\ExpensesList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/expenses', ExpensesList::class)->name('expenses.list');
    Route::get('/expenses/{id}', ExpensesList::class)->name('expenses.show');
});
