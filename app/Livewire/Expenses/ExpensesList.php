<?php

namespace App\Livewire\Expenses;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Pikutrack | Expenses')]
class ExpensesList extends Component
{
    use WithPagination;

    public function render()
    {
        $expenses = auth()->user()
            ->expenses()
            ->orderBy('date', 'desc')
            ->paginate(10);

        return view('livewire.expenses.expenses-list', [
            'expenses' => $expenses,
        ]);
    }
}
