<x-card title="Settings" :image="$this->user->hasAvatar() ? $this->user->avatar : null">

    <div class="divider">Change avatar</div>

    <livewire:users.avatar-switcher />

    <div class="divider">Account settings</div>

    <form wire:submit.prevent="save" class="flex flex-col gap-2">

        <label class="input input-bordered flex items-center gap-2 w-full">
            <i class="fa-solid fa-user"></i>
            <input wire:model="name" class="grow" placeholder="Name" />
        </label>

        <label class="input input-bordered flex items-center gap-2 w-full">
            <i class="fa-solid fa-envelope"></i>
            <input wire:model="email" class="grow" placeholder="Email" />
        </label>

        <label class="input input-bordered flex items-center gap-2 w-full">
            <i class="fa-solid fa-wallet"></i>
            <input wire:model="spending_limit" type="number" step="0.01" class="grow" placeholder="Spending limit" />
        </label>

        @if($errors->any())
            <div class="mt-4 mb-2 text-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button type="submit" class="btn btn-block btn-secondary">
            Save
            <span wire:loading class="loading loading-spinner"></span>
        </button>

    </form>

    <div class="divider">Change password</div>

    <livewire:users.password-changer />

    <div class="divider"></div>

    <button wire:click="logout" class="btn btn-block btn-outline btn-secondary">
        <i class="fa-solid fa-door-open"></i>
        Logout
        <span wire:loading class="loading loading-spinner"></span>
    </button>

</x-card>