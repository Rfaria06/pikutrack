<?php

namespace App\Livewire\Expenses;

use App\Models\Expense;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Show extends Component
{
    use AuthorizesRequests;

    public Expense $expense;

    public function mount(Expense $expense)
    {
        $this->expense = $expense;

        $this->authorize('view', $this->expense);
    }

    public function render()
    {
        return view('livewire.expenses.show');
    }
}
