<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|min:2')]
    public string $name = '';

    #[Validate('required|email|unique:users')]
    public string $email = '';

    #[Validate('required|min:8')]
    public string $password = '';

    public function save()
    {
        $this->validate();

        User::create($this->pull());

        session()->flash('message', 'User created');

        $this->redirectRoute('users', navigate: true);
    }

    public function render()
    {
        return view('livewire.users.create');
    }
}
