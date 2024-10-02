<button class="btn btn-ghost btn-circle">
    <div class="dropdown dropdown-end">
        <div role="button" tabindex="0" class="btn btn-ghost btn-circle avatar">
            {{$this->initials}}
        </div>
        <ul class="menu menu-lg dropdown-content rounded-box z-[1] mt-3 bg-base-300">
            <li>
                <a href="#" wire:click.prevent="logout">
                    <i class="fa-solid fa-door-open"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</button>
