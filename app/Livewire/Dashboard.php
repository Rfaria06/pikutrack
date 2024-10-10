<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pikutrack | Dashboard')]
class Dashboard extends Component
{
    public $expenses_today = [];

    public function mount()
    {
        $this->expenses_today = auth()->user()->expenses()
            ->today()
            ->limit(8)
            ->get();
    }
}
