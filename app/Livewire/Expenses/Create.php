<?php

namespace App\Livewire\Expenses;

use App\Livewire\Forms\ExpenseForm;
use App\Models\Expense;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pikutrack | Create expense')]
class Create extends Component
{
    use AuthorizesRequests;

    public ExpenseForm $form;

    public function save()
    {
        $expense = $this->form->store();

        session()->flash('message', 'Expense created');

        return $this->redirectRoute('expenses.show', $expense, navigate: true);
    }

    public function mount()
    {
        $this->authorize('create', Expense::class);
    }

    public function render()
    {
        return view('livewire.expenses.create');
    }
}
