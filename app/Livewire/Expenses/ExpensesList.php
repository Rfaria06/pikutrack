<?php

namespace App\Livewire\Expenses;

use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Pikutrack | Expenses')]
class ExpensesList extends Component
{
    use WithPagination;

    public bool $filter_this_month = false;

    public bool $filter_today = false;

    public function render()
    {
        $expenses = auth()->user()
            ->expenses()
            ->orderBy('date', 'desc');

        if ($this->filter_this_month) {
            $expenses = $expenses->thisMonth();
        } elseif ($this->filter_today) {
            $expenses = $expenses->today();
        }

        return view('livewire.expenses.expenses-list', [
            'expenses' => $expenses->paginate(10),
        ]);
    }

    #[On('toggle-filter-this-month')]
    public function toggleFilterThisMonth()
    {
        $this->filter_this_month = ! $this->filter_this_month;
        $this->dispatch('this-month-filter-changed', $this->filter_this_month);
    }

    #[On('toggle-filter-today')]
    public function toggleFilterToday()
    {
        $this->filter_today = ! $this->filter_today;
        $this->dispatch('today-filter-changed', $this->filter_today);
    }
}
