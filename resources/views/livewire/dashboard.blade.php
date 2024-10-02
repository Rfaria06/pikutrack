<div class="w-full">
    <h1 class="font-bold text-xl mb-4">Dashboard</h1>
    <div class="divider"></div>

    <h2 class="font-bold mb-3">Latest expenses</h2>

    @foreach($this->expenses as $expense)
        <livewire:expenses.expense-overview :expense="$expense" />
    @endforeach
</div>
