<?php

namespace App\Livewire\Expenses;

use App\Enums\QuickFilterOption;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Pikutrack | Expenses')]
class ExpensesList extends Component
{
    use WithPagination;

    #[Url]
    public QuickFilterOption $quick_filter = QuickFilterOption::NONE;

    public function applyFilter()
    {
        $this->resetPage();
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
