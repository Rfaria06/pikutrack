<x-guest-layout>
    <div class="hero">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Pikutrack</h1>
                <p class="py-6">
                    The friendly expense tracker
                </p>
                @auth
                    <a wire:navigate href="{{url('/dashboard')}}" class="btn btn-block btn-primary">
                        Dashboard
                    </a>
                    @else
                    <a wire:navigate href="{{route('login')}}" class="btn btn-block btn-primary">
                        Log in
                    </a>
                @endauth
            </div>
        </div>
    </div>
</x-guest-layout>