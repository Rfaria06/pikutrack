<?php

use App\Livewire\Expenses\Create;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Create::class)
        ->assertStatus(200);
});
