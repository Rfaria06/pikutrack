<?php

namespace App\Livewire\Nav\App;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ProfileButton extends Component
{
    public $initials = '';

    public $avatar_url = '';

    public function mount()
    {
        $user = auth()->user();
        if ($user->hasAvatar()) {
            $this->avatar_url = Storage::url($user->avatar);

            return;
        }

        // Get the first and last name
        // FIXME: If the user has a middle name, the first letter of the middle name will be taken
        $name_parts = explode(' ', auth()->user()->name, 2);

        // Get the first letter of first and last name
        $this->initials = $name_parts[0][0].($name_parts[1][0] ?? '');
    }

    public function render()
    {
        return view('livewire.nav.app.profile-button');
    }
}
