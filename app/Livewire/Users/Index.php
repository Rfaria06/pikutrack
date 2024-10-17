<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Lazy]
#[Title('Pikutrack | User management')]
class Index extends Component
{
    /** @var User[] */
    public $users = [];

    public function mount()
    {
        $this->users = User::all();
    }

    public function placeholder(array $params = [])
    {
        return view('livewire.users.index-skeleton', $params);
    }

    public function render()
    {
        return view('livewire.users.index');
    }
}
