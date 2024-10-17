<?php

namespace App\Livewire\Expenses;

use App\Models\Expense;
use App\Traits\ConvertMonetaryAmount;
use Livewire\Component;

class ExpenseOverview extends Component
{
    use ConvertMonetaryAmount;

    public Expense $expense;

    public string $time_diff = '';

    // Use local variable for amount to set it as float
    public string $amount = '';

    public function mount(Expense $expense)
    {
        $this->expense = $expense;
        $this->amount = $this->chfAsString($expense->amount);

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
