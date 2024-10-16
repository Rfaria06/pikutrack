<x-guest-layout>
    <x-slot name="title">
        Pikutrack | Reset password
    </x-slot>

    <main class="w-full">

        <h1 class="text-xl font-bold mb-5">Reset password</h1>

        <form method="POST" action="{{route('password.request')}}" class="mx-auto flex flex-col gap-3 w-full">
            @csrf

            <label class="input input-primary flex items-center gap-2 w-full">
                <i class="fa-solid fa-envelope"></i>
                <input name="email" type="email" autocomplete="email" class="grow" placeholder="Email" />
            </label>

            <button type="submit" class="btn btn-block btn-primary">Request password reset</button>
        </form>
    </main>

</x-guest-layout>