<?php

namespace App\Livewire\Expenses;

use App\Enums\Category;
use App\Enums\QuickFilterOption;
use App\Filters\ExpenseFilter;
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

    #[Url]
    public ?Category $category = null;

    public function applyFilter()
    {
        $this->resetPage();
    }

    public function resetFilter()
    {
        $this->quick_filter = QuickFilterOption::NONE;
        $this->category = null;
    }

    public function render(ExpenseFilter $filter)
    {
        $expenses = $filter
            ->fromFilterOptions($this->quick_filter, $this->category);

        return view('livewire.expenses.expenses-list', [
            'expenses' => $expenses->paginate(10),
        ]);
    }
}
