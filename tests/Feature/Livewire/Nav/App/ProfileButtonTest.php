<?php

use App\Livewire\Nav\App\ProfileButton;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ProfileButton::class)
        ->assertStatus(200);
});
