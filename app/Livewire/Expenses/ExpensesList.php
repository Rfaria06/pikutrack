<?php

namespace App\Livewire\Expenses;

use App\Enums\QuickFilterOption;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Pikutrack | Expenses')]
class ExpensesList extends Component
{
    use WithPagination;

    private QuickFilterOption $quick_filter = QuickFilterOption::NONE;

    #[On('expenses.filter.applied')]
    public function filter($options)
    {
        $this->quick_filter = QuickFilterOption::tryFrom($options['quick_filter']);
    }

    public function render()
    {
        $expenses = auth()->user()
            ->expenses()
            ->orderBy('date', 'desc');

        if ($this->quick_filter === QuickFilterOption::MONTH) {
            $expenses = $expenses->thisMonth();
        } elseif ($this->quick_filter === QuickFilterOption::TODAY) {
            $expenses = $expenses->today();
        }

        return view('livewire.expenses.expenses-list', [
            'expenses' => $expenses->paginate(10),
        ]);
    }
}
