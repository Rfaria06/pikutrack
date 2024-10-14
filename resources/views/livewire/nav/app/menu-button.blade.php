<button class="btn btn-ghost btn-circle">
    <div class="dropdown dropdown-start">
        <div role="button" tabindex="0" class="btn btn-ghost btn-circle">
            <i class="fa-solid fa-bars"></i>
        </div>
        <ul class="menu menu-lg dropdown-content rounded-box z-[1] mt-3 bg-base-300">
            <li>
                <a href="{{route("expenses.index")}}" wire:navigate>
                    <i class="fa-solid fa-coins"></i>
                    Expenses
                </a>
            </li>
        </ul>
    </div>
</button>