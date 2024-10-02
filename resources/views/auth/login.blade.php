<x-guest-layout>
    <x-slot name="title">
        Pikutrack | Login
    </x-slot>

<main class="flex flex-col w-full">

    <h1 class="text-xl font-bold mb-5">Login</h1>

    <form method="POST" action="{{ route('login') }}" class="mx-auto flex flex-col gap-3 w-full" onsubmit="showSpinner(event)">
        @csrf

        <!-- Email Address -->
        <label class="input input-bordered input-primary flex items-center gap-2">
            <i class="fa-solid fa-envelope"></i>
            <input id="email" type="email" name="email" class="grow" placeholder="Email" value="{{ old('email') }}" required autofocus>
        </label>

        <!-- Password -->
        <label class="input input-bordered input-primary flex items-center gap-2">
            <i class="fa-solid fa-key"></i>
            <input id="password" type="password" name="password" placeholder="Password" class="grow" required>
        </label>

        <!-- Remember Me -->
        <div class="mt-4">
            <label for="remember_me" class="flex flex-row items-center gap-2">
                <input type="checkbox" id="remember_me" name="remember" class="checkbox">
                Remember Me
            </label>
        </div>

        <!-- Submit Button with Spinner -->
        <div class="mt-4 flex justify-end">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </div>

        <!-- Display all errors (optional) -->
        @if ($errors->any())
            <div class="mt-4 text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

</main>
</x-guest-layout>
