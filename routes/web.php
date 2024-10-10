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

    Route::get('/expenses', Expenses\ExpensesList::class)->name('expenses.index');
    Route::get('/expenses/create', Create::class)->name('expenses.create');
    Route::get('/expenses/{expense}', Expenses\Show::class)->name('expenses.show');
    Route::get('/expenses/{expense}/edit', Edit::class)->name('expenses.edit');
});
