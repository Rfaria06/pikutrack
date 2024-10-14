<x-guest-layout>
    <x-slot name="title">
        Pikutrack | Reset password
    </x-slot>

    <main>

        <h1 class="text-xl font-bold mb-5">Login</h1>

        <form method="POST" action="{{route('forgot-password')}}" class="mx-auto flex flex-col gap-3 w-full">
            @csrf
        </form>
    </main>

</x-guest-layout>