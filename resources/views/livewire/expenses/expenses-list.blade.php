<div class="w-full pb-12">
    <h1 class="font-bold text-3xl mb4">Expenses</h1>
    <div class="divider"></div>

    <livewire:expenses.filter-drawer />

    <button wire:click="resetFilter" class="btn btn-block btn-secondary mb-3">Reset Filter</button>

    <h2 class="font-bold mb-3">Your expenses</h2>

    @foreach($expenses as $expense)
        <livewire:expenses.expense-overview :expense="$expense" :key="$expense->id" />
    @endforeach

    {{$expenses->links()}}
</div>