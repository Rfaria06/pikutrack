<button class="btn btn-ghost btn-circle">
    <div class="dropdown dropdown-end">
        <div role="button" tabindex="0" class="btn btn-ghost btn-circle avatar">
            @if($this->avatar_url)
                <img src="{{$this->avatar_url}}" class="object-cover rounded-full" />
            @else
                {{$this->initials}}
            @endif
        </div>
        <ul class="menu menu-lg dropdown-content rounded-box z-[1] mt-3 bg-base-300">
            <li>
                <a href="{{route("settings")}}" wire:navigate>
                    <i class="fa-solid fa-gear"></i>
                    Settings
                </a>
            </li>
            <li>
                <a href="#" wire:click.prevent="logout">
                    <i class="fa-solid fa-door-open"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</button>