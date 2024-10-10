<div class="w-full pb-12">
    <h1 class="font-bold text-3xl mb4">Expenses</h1>
    <div class="divider"></div>

    <x-create-expense-button />

    <livewire:expenses.filter-drawer />

    <h2 class="font-bold mb-3">Your expenses</h2>

    @foreach($expenses as $expense)
        <livewire:expenses.expense-overview :expense="$expense" :key="$expense->id" />
    @endforeach

    {{$expenses->links()}}
</div>