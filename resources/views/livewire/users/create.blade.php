<div class="drawer z-[1]">
    <input id="create-user-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <label for="create-user-drawer" class="btn btn-block btn-primary drawer-button mb-3">
            <i class="fa-solid fa-user-plus"></i>
            Create user
        </label>
    </div>
    <div class="drawer-side">
        <label for="create-user-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
            <h3 class="font-bold text-lg inline-flex justify-between">
                Create User
                <i class="fa-solid fa-user-plus"></i>
            </h3>
            <div class="divider"></div>

            <form wire:submit="save" class="flex flex-col gap-2">

                {{-- Name --}}
                <label class="input input-bordered flex justify-center items-center gap-2">
                    <i class="fa-solid fa-user"></i>
                    <input wire:model="name" placeholder="Name" class="grow" />
                </label>

                {{-- Email --}}
                <label class="input input-bordered flex justify-center items-center gap-2">
                    <i class="fa-solid fa-envelope"></i>
                    <input wire:model="email" placeholder="Email" class="grow" />
                </label>

                {{-- Password --}}
                <label class="input input-bordered flex justify-center items-center gap-2">
                    <i class="fa-solid fa-key"></i>
                    <input wire:model="password" type="password" placeholder="Password" class="grow" />
                </label>

                <select wire:model.live="user_type" class="select select-bordered w-full">
                    @foreach(App\Enums\UserType::cases() as $case)
                        <option wire:key="{{$case->value}}" value="{{$case->value}}">{{$case->getDisplayName()}}</option>
                    @endforeach
                </select>

                @if($errors->any())
                    <div class="mt-4 mb-2 text-error">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button type="submit" class="btn btn-block btn-primary">
                    Save
                    <span wire:loading class="loading loading-spinner"></span>
                </button>

            </form>

        </ul>
    </div>
</div>