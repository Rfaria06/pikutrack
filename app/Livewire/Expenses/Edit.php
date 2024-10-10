<?php

namespace App\Livewire\Expenses;

use App\Livewire\Forms\ExpenseForm;
use App\Models\Expense;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pikutrack | Edit expense')]
class Edit extends Component
{
    use AuthorizesRequests;

    public ExpenseForm $form;

    public function save()
    {
        if (is_null($this->form->expense)) {
            return;
        }

        $this->authorize('update', $this->form->expense);

        $this->form->update();

        return $this->redirectRoute('expenses.show', $this->form->expense, navigate: true);
    }

    public function delete()
    {
        if (is_null($this->form->expense)) {
            return;
        }

        $this->authorize('delete', $this->form->expense);

        $this->form->expense->delete();

        return $this->redirectRoute('expenses.index');
    }

    public function mount(Expense $expense)
    {
        $this->authorize('update', $expense);

        $this->form->setExpense($expense);
    }

    public function render()
    {
        return view('livewire.expenses.edit');
    }
}
