<?php

use App\Http\Middleware\CheckAdmin;
use App\Livewire\Dashboard;
use App\Livewire\Expenses;
use App\Livewire\Expenses\Create;
use App\Livewire\Expenses\Edit;
use App\Livewire\Users\Index;
use App\Livewire\Users\Settings;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('root');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/settings', Settings::class)->name('settings');

    Route::prefix('expenses')->name('expenses.')->group(function () {
        Route::get('/', Expenses\ExpensesList::class)->name('index');
        Route::get('/create', Create::class)->name('create');
        Route::get('/{expense}', Expenses\Show::class)->name('show');
        Route::get('/{expense}/edit', Edit::class)->name('edit');
    });

    Route::get('/users', Index::class)
        ->name('users')
        ->middleware(CheckAdmin::class);
});
