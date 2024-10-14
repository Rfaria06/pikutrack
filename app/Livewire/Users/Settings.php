<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public User $user;

    #[Validate('required')]
    public string $name = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|numeric')]
    public int $spending_limit = 0;

    public function save() {}

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.users.settings');
    }
}
