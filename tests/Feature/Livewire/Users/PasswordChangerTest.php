<?php

use App\Livewire\Users\PasswordChanger;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(PasswordChanger::class)
        ->assertStatus(200);
});
