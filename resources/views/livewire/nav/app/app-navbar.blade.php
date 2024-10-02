<div class="navbar bg-base-300">
    <div class="navbar-start">
        <button>Menu</button>
    </div>
    <div class="navbar-center transition-transform">
        <a wire:navigate href="{{route('dashboard')}}" class="btn btn-ghost text-xl">Pikutrack</a>
    </div>

    <div class="navbar-end">
        <livewire:nav.app.profile-button />
    </div>
</div>