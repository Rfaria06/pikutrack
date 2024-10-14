<?php

use App\Livewire\Users\Settings;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Settings::class)
        ->assertStatus(200);
});
