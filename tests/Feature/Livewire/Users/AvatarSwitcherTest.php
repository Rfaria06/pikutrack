<?php

use App\Livewire\Users\AvatarSwitcher;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(AvatarSwitcher::class)
        ->assertStatus(200);
});
