<?php

namespace App\Livewire\Forms;

use App\Enums\Category;
use App\Models\Expense;
use App\Traits\ConvertMonetaryAmount;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ExpenseForm extends Form
{
    use ConvertMonetaryAmount;

    #[Validate('required')]
    public string $name = '';

    public string $description = '';

    #[Validate('required')]
    public Category $category = Category::OTHER;

    #[Validate('required|numeric')]
    public float $amount = 0;

    #[Validate('required|date')]
    public string $date;

    public ?Expense $expense;

    /**
     * Store the new expense in the database
     */
    public function store()
    {
        $this->validate();

        $this->amount = $this->centsFromChf($this->amount);

        return auth()->user()->expenses()
            ->create($this->except('expense'));
    }

    public function update()
    {
        $this->validate();

        $this->amount = $this->centsFromChf($this->amount);

        $this->expense->update(
            $this->except('expense')
        );
    }

    public function setExpense(Expense $expense)
    {
        $this->expense = $expense;
        $this->name = $expense->name;
        $this->description = $expense->description;
        $this->category = $expense->category;
        $this->amount = $this->chfFromCents($expense->amount);
        $this->date = $this->expense->date->format('Y-m-d\TH:i');
    }
}
