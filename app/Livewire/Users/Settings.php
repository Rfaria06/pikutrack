<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Session;
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
        // Convert the decimal string back to a float and only keep the last 2 decimal places
        $spending_limit = (float) number_format($this->spending_limit, 2, '.', '');
        $user->spending_limit = floor($spending_limit * 100); // Convert back to cents

        $user->save();

        session()->flash('message', 'Settings updated');

        $this->redirectRoute('settings', navigate: true);
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->spending_limit = $this->user->spending_limit / 100;
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
