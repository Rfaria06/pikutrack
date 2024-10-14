<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class UserForm extends Form
{
    use WithFileUploads;

    #[Validate('required')]
    public string $name = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|numeric')]
    public int $spending_limit = 0;

    #[Validate('nullable|sometimes|image|max:2048')]
    public $avatar;

    public ?User $user;

    public function store()
    {
        $this->validate();

        return User::create($this->except('user'));
    }

    public function update()
    {
        $validated = $this->validate();

        if ($this->avatar) {
            $validated['avatar'] = $this->avatar->store('avatars', 'public');
        }

        $this->user->update($this->except('user'));
    }

    public function setUser(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->spending_limit = $user->spending_limit;
        if ($user->hasAvatar()) {
            $this->avatar = $user->avatar;
        }
    }
}
