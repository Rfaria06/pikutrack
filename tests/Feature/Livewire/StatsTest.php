<?php

use App\Livewire\Stats;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Stats::class)
        ->assertStatus(200);
});
