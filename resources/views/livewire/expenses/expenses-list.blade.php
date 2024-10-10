<div class="w-full pb-12">
    <h1 class="font-bold text-3xl mb4">Expenses</h1>
    <div class="divider"></div>

    <x-create-expense-button />

    <livewire:expenses.filter-drawer />

    <h2 class="font-bold mb-3">Your expenses</h2>

    @unless(count($expenses) === 0)
        @foreach($expenses as $expense)
            <livewire:expenses.expense-overview :expense="$expense" :key="$expense->id" />
        @endforeach

        @else
        <span>No Expenses yet!</span>
    @endunless

    {{$expenses->links()}}
</div>