<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $expenses = [];

    public function mount()
    {
        $this->expenses = auth()->user()
            ->expenses()
            ->today()
            ->limit(15)
            ->get();
    }
}
