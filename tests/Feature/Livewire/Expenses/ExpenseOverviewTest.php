<?php

use App\Livewire\Expenses\ExpenseOverview;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ExpenseOverview::class)
        ->assertStatus(200);
});
