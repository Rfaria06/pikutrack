<?php

use App\Livewire\Nav\App\MenuButton;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(MenuButton::class)
        ->assertStatus(200);
});
