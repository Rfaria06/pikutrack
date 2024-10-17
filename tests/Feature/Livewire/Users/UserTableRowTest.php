<?php

use App\Livewire\Users\UserTableRow;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(UserTableRow::class)
        ->assertStatus(200);
});
