<?php

namespace App\Livewire\Users;

use App\Enums\UserType;
use App\Models\User;
use Livewire\Component;

class UserTableRow extends Component
{
    public User $user;

    public UserType $user_type = UserType::NORMAL;

    public bool $is_self = false;

    public function updatedUserType($value)
    {
        // Check if the user is not an admin, if so, stop execution
        if (! auth()->user()->isAdmin()) {
            return;
        }

        session()->flash('message', 'User type saved');

        // Update the user type in the database
        $this->user->update(['user_type' => $value]);

        $this->redirectRoute('users', navigate: true);
    }

    public function deleteUser()
    {
        // Check if the user is not an admin, if so, stop execution
        if (! auth()->user()->isAdmin()) {
            return;
        }

        $name = $this->user->name;
        $email = $this->user->email;
        $this->user->delete();

        session()->flash('message', "$name <$email> deleted");

        $this->redirectRoute('users', navigate: true);
    }

    public function mount(User $user)
    {
        $this->user = $user;
        $this->user_type = $user->user_type;
        $this->is_self = auth()->id() === $user->id;
    }

    public function render()
    {
        return view('livewire.users.user-table-row');
    }
}
