<x-card title="Settings" :image="$this->user->hasAvatar() ? $this->user->avatar : null">

    <livewire:users.avatar-switcher />

    <div class="divider"></div>

    <form wire:submit="save" class="flex flex-col gap-2">

        <label class="input input-bordered flex items-center gap-2 w-full">
            <i class="fa-solid fa-user"></i>
            <input wire:model="name" class="grow" placeholder="Name" />
        </label>

        <label class="input input-bordered flex items-center gap-2 w-full">
            <i class="fa-solid fa-envelope"></i>
            <input wire:model="email" class="grow" placeholder="Email" />
        </label>

        <button type="submit" class="btn btn-block btn-primary">Save</button>
    </form>

</x-card>