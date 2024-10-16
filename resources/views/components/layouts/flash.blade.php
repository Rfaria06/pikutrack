<div class="toast toast-top toast-center w-full">
    @if(session('message') || true)
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" role="alert" class="mx-auto alert mt-16 shadow-xl max-w-2xl">
            <i class="fa-solid fa-circle-info"></i>
            <span>{{session('message')}}</span>
        </div>
    @endif
</div>