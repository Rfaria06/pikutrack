<!-- resources/views/auth/login.blade.php -->
<x-guest-layout>
    <x-slot name="title">
        Pikutrack | Login
    </x-slot>

    <h1>Hi</h1>

    <!-- Fortify login form here -->
    <form method="POST" action="{{route('login')}}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required autofocus>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <!-- Remember Me -->
        <div class="mt-4">
            <label for="remember_me">
                <input type="checkbox" id="remember_me" name="remember">
                Remember Me
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