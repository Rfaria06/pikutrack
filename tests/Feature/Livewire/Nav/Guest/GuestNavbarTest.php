<?php

use App\Livewire\Nav\Guest\GuestNavbar;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(GuestNavbar::class)
        ->assertStatus(200);
});
