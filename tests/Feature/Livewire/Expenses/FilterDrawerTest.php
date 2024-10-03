<?php

use App\Livewire\Expenses\FilterDrawer;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(FilterDrawer::class)
        ->assertStatus(200);
});
