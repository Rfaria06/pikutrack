<div class="w-full">
    <h1 class="font-bold text-3xl mb-4">Dashboard</h1>
    <div class="divider"></div>

    <livewire:stats />

    <x-create-expense-button />

    @unless(count($this->expenses_today) === 0)
        <h2 class="font-bold mb-3">Today's expenses</h2>

        @foreach($this->expenses_today as $expense)
            <livewire:expenses.expense-overview :expense="$expense" :key="$expense->id" />
        @endforeach

        @else
        <span>No expenses today! 🎉</span>
    @endunless
</div>