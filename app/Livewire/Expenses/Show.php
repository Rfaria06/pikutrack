<?php

namespace App\Livewire\Expenses;

use App\Models\Expense;
use App\Traits\ConvertMonetaryAmount;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Show extends Component
{
    use AuthorizesRequests;
    use ConvertMonetaryAmount;

    public Expense $expense;

    public string $amount = '';

    public function mount(Expense $expense)
    {
        $this->expense = $expense;
        $this->amount = $this->chfAsString($expense->amount);

        $this->authorize('view', $this->expense);
    }

    public function render()
    {
        return view('livewire.expenses.show');
    }
}
