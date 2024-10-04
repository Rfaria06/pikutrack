<?php

namespace App\Livewire\Expenses;

use App\Models\Expense;
use Livewire\Component;

class ExpenseOverview extends Component
{
    public Expense $expense;

    public string $time_diff = '';

    public function mount(Expense $expense)
    {
        $this->expense = $expense;
        $this->expense->amount /= 100;

        // Check if date difference is more than 24 hours
        if ($this->expense->date->diffInHours(now()) > 24) {
            // Time is more than 24 hours ago -> Display the date
            $this->time_diff = $this->expense->date->format('d. M Y H:i');
        } else {
            // Otherwise, show the diff
            $this->time_diff = $this->expense->date->diffForHumans();
        }
    }

    public function render()
    {
        return view('livewire.expenses.expense-overview');
    }
}
