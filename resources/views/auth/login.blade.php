<x-guest-layout>
    <x-slot name="title">
        Pikutrack | Login
    </x-slot>

    <form method="POST" action="{{route('login')}}" class="mx-auto flex flex-col gap-3 w-full">
        @csrf

        <label class="input input-bordered flex items-center gap-2">
            <i class="fa-solid fa-mail"></i>
            <input id="email" type="email" name="email" placeholder="Email" required autofocus>
        </label>

        <input id="password" type="password" name="password" placeholder="Password" class="input input-bordered" required>

        <!-- Remember Me -->
        <div class="mt-4">
            <label for="remember_me">
                <input type="checkbox" id="remember_me" name="remember">
                Remember Me <i class="fa-solid fa-comment"></i>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="mt-4">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
                Log in
            </button>
        </div>
    </form>
</x-guest-layout>