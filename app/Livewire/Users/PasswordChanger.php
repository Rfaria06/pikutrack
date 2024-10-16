<?php

namespace App\Livewire\Users;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Livewire\Component;

class PasswordChanger extends Component
{
    use PasswordValidationRules;

    public string $password = '';

    public string $password_confirmation = '';

    public string $old_password = '';

    public function changePassword()
    {
        $this->validate([
            'old_password' => ['required', 'current_password'],
            'password' => $this->passwordRules(),
        ]);

        // Get the user from the database instead of the session
        /** @var User */
        $user = User::find(auth()->id());

        $user->update(['password' => $this->password]);

        session()->flash('message', 'Password updated');

        $this->redirectRoute('settings', navigate: true);
    }

    public function render()
    {
        return view('livewire.users.password-changer');
    }
}
