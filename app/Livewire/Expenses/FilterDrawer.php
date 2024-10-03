<?php

namespace App\Livewire\Expenses;

use App\Enums\QuickFilterOption;
use Livewire\Component;

class FilterDrawer extends Component
{
    public QuickFilterOption $quick_filter = QuickFilterOption::NONE;

    public function applyFilter()
    {
        $this->dispatch('expenses.filter.applied', [
            'quick_filter' => $this->quick_filter,
        ]);
    }

    public function render()
    {
        return view('livewire.expenses.filter-drawer');
    }
}
