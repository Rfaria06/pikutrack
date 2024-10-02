<?php

namespace App\Livewire\Expenses;

use App\Models\Expense;
use Livewire\Component;

class ExpenseOverview extends Component
{
    public Expense $expense;

    public string $timeDiff = '';

    public function mount(Expense $expense)
    {
        $this->expense = $expense;
        $this->expense->amount /= 100;
        $this->timeDiff = $this->expense->date->diffForHumans();
    }

    public function render()
    {
        return view('livewire.expenses.expense-overview');
    }
}
