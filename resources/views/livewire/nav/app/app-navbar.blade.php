<div class="navbar bg-base-300">
    <div class="navbar-start">
        <livewire:nav.app.menu-button />
    </div>
    <div class="navbar-center transition-transform">
        <a wire:navigate href="{{route('dashboard')}}" class="btn btn-ghost text-3xl bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">Pikutrack</a>
    </div>

    <div class="navbar-end">
        <livewire:nav.app.profile-button />
    </div>
</div>
