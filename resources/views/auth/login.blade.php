<x-guest-layout>
    <x-slot name="title">
        Pikutrack | Login
    </x-slot>

<main class="flex flex-col w-full">

    <h1 class="text-xl font-bold mb-5">Login</h1>

    <form method="POST" action="{{ route('login') }}" class="mx-auto flex flex-col gap-3 w-full" onsubmit="showSpinner(event)">
        @csrf

        <!-- Email Address -->
        <label class="input input-bordered flex items-center gap-2">
            <i class="fa-solid fa-mail"></i>
            <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        </label>

        <!-- Password -->
        <input id="password" type="password" name="password" placeholder="Password" class="input input-bordered" required>

        <!-- Remember Me -->
        <div class="mt-4">
            <label for="remember_me" class="flex flex-row items-center gap-2">
                <input type="checkbox" id="remember_me" name="remember" class="checkbox">
                Remember Me
            </label>
        </div>

        <!-- Submit Button with Spinner -->
        <div class="mt-4 flex justify-end">
            <button type="submit" class="btn btn-primary flex items-center justify-center gap-2" id="submit-btn">
                <span id="submit-text">Login</span>
                <span id="spinner" class="loading loading-spinner loading-md hidden"></span>
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

    <!-- JavaScript to handle spinner -->
    <script>
        function showSpinner(event) {
            // Prevent the form from submitting multiple times
            event.target.querySelector('button[type="submit"]').disabled = true;

            // Show the spinner and hide the text
            document.getElementById('spinner').classList.remove('hidden');
        }
    </script>
</x-guest-layout>
