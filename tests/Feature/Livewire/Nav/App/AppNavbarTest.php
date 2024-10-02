<?php

use App\Livewire\Nav\App\AppNavbar;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(AppNavbar::class)
        ->assertStatus(200);
});
