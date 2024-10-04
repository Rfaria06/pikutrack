<?php

namespace App\Livewire\Expenses;

use App\Models\Expense;
use Livewire\Component;

class Show extends Component
{
    public Expense $expense;

    public function mount(Expense $expense)
    {
        $this->expense = $expense;
    }

    public function render()
    {
        return view('livewire.expenses.show');
    }
}
