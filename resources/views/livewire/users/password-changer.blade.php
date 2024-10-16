<form wire:submit="changePassword" class="flex flex-col gap-2 w-full">

    <label class="input input-bordered flex items-center gap-2 w-full">
        <i class="fa-solid fa-key"></i>
        <input wire:model="password" type="password" class="grow" placeholder="New password" autocomplete="new-password" />
    </label>

    <label class="input input-bordered flex items-center gap-2 w-full">
        <i class="fa-solid fa-key"></i>
        <input wire:model="password_confirmation" type="password" class="grow" placeholder="Confirm new password" autocomplete="new-password" />
    </label>

    <label class="input input-bordered flex items-center gap-2 w-full">
        <i class="fa-solid fa-key"></i>
        <input wire:model="old_password" type="password" class="grow" placeholder="Old password" autocomplete="current-password" />
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
        Update password
        <span wire:loading class="loading loading-spinner"></span>
    </button>

</form>