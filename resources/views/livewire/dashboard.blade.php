<div class="w-full">
    <h1 class="font-bold text-3xl mb-4">Dashboard</h1>
    <div class="divider"></div>

    <livewire:stats :expenses="$this->expenses" />

    <h2 class="font-bold mb-3">Latest expenses</h2>

    @foreach($this->expenses as $expense)
        <livewire:expenses.expense-overview :expense="$expense" :key="$expense->id" />
    @endforeach
</div>