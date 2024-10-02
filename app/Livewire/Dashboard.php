<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pikutrack | Dashboard')]
class Dashboard extends Component
{
    private $expenses = [];

    public function mount()
    {
        $this->expenses = auth()->user()
            ->expenses()
            ->today()
            ->limit(15)
            ->get();
    }
}
