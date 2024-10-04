<?php

use App\Livewire\Expenses\Show;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Show::class)
        ->assertStatus(200);
});
