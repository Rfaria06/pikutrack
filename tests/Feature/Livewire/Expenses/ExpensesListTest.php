<?php

use App\Livewire\Expenses\ExpensesList;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ExpensesList::class)
        ->assertStatus(200);
});
