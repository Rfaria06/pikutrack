<?php

namespace App\Livewire\Expenses;

use App\Enums\Category;
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

    #[Url]
    public ?Category $category = null;

    public function applyFilter()
    {
        $this->resetPage();
    }

    public function resetFilter()
    {
        $this->quick_filter = QuickFilterOption::NONE;
    }

    private function filterExpenses($expenses)
    {
        // Filter the timespan
        if ($this->quick_filter === QuickFilterOption::MONTH) {
            $expenses = $expenses->thisMonth();
        } elseif ($this->quick_filter === QuickFilterOption::TODAY) {
            $expenses = $expenses->today();
        }

        // Filter the category
        if (! is_null($this->category)) {
            $expenses = $expenses->where('category', $this->category);
        }

        return $expenses;
    }

    public function render()
    {
        $expenses = auth()->user()
            ->expenses()
            ->orderBy('date', 'desc');

        $expenses = $this->filterExpenses($expenses);

        return view('livewire.expenses.expenses-list', [
            'expenses' => $expenses->paginate(10),
        ]);
    }
}
