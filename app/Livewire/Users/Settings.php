<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Traits\ConvertMonetaryAmount;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use ConvertMonetaryAmount;
    use WithFileUploads;

    public User $user;

    #[Validate('required')]
    public string $name = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|numeric')]
    public float $spending_limit = 0;

    public function save()
    {
        $this->validate();

        // Intentionally retrieve user again so the user that gets updated cannot be tampered with
        // auth()->user() gets the user from the session, we will completely refetch the user from the database, so no tampering is possible
        /** @var User */
        $user = User::find(auth()->id());

        $user->name = trim($this->name);
        $user->email = trim($this->email);
        $user->spending_limit = $this->centsFromChf($this->spending_limit);

        $user->save();

        session()->flash('message', 'Settings updated');

        $this->redirectRoute('settings', navigate: true);
    }

    public function deleteUser()
    {
        if (User::admin()->count() <= 1) {
            session()->flash('message', 'There must be at least 1 admin');

            return $this->redirectRoute('settings', navigate: true);
        }

        auth()->user()->delete();
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->spending_limit = $this->chfFromCents($this->user->spending_limit);
    }

    public function logout()
    {
        auth()->logout();

        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.users.settings');
    }
}
