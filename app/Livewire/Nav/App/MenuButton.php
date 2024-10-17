<?php

namespace App\Livewire\Nav\App;

use Livewire\Component;

class MenuButton extends Component
{
    public bool $is_admin = false;

    public function mount()
    {
        $this->is_admin = auth()->user()->isAdmin();
    }

    public function render()
    {
        return view('livewire.nav.app.menu-button');
    }
}
