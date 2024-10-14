<?php

namespace App\Livewire\Users;

use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AvatarSwitcher extends Component
{
    use WithFileUploads;

    #[Validate('nullable|sometimes|image|max:2048')]
    public $avatar;

    public function save()
    {
        $this->validate();

        $user = auth()->user();

        // Delete old avatar if it exists
        if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
            Storage::disk('public')->delete($user->avatar);
        }

        // Store new avatar
        $filename = $this->avatar->store('avatars', 'public');

        // Update the user model
        $user->update([
            'avatar' => $filename,
        ]);

        $this->redirectRoute('settings', navigate: true);
    }

    public function mount()
    {
        $this->avatar = auth()->user()->avatar;
    }

    public function render()
    {
        return view('livewire.users.avatar-switcher');
    }
}
