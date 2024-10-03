<?php

namespace App\Livewire\Expenses;

use Livewire\Attributes\On;
use Livewire\Component;

class FilterDrawer extends Component
{
    public string $filterThisMonthClassName = 'btn-outline';

    public string $filterTodayClassName = 'btn-outline';

    #[On('this-month-filter-changed')]
    public function getFilterThisMonthClassName(bool $active)
    {
        $this->filterThisMonthClassName = $active ? '' : 'btn-outline';
    }

    #[On('today-filter-changed')]
    public function getFilterTodayClassName(bool $active)
    {
        $this->filterTodayClassName = $active ? '' : 'btn-outline';
    }

    public function render()
    {
        return view('livewire.expenses.filter-drawer');
    }
}
