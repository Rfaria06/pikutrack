<?php

namespace App\Livewire;

use App\Models\Expense;
use Livewire\Component;

class Stats extends Component
{
    public int $percent_budget_reached = 0;

    public int $spendings_this_month = 0;

    private int $budget = 0;

    public bool $budget_exceeded = false;

    public bool $budget_warning = false;

    public string $current_month = '';

    /**
     * @param  Expense[]  $expenses
     */
    public function mount($expenses)
    {
        $this->budget = auth()->user()->spending_limit;
        $this->current_month = date('F');
        $this->calculateSpendingsThisMonth($expenses);
    }

    /**
     * Calculate the percent of the reached spending limit this month.
     * Also set $this->budgedExceeded if it is over 100%
     *
     * @param  Expense[]  $expenses  The expenses this month
     */
    private function calculateSpendingsThisMonth($expenses)
    {
        foreach ($expenses as $expense) {
            $this->spendings_this_month += $expense->amount;
        }
        $this->percent_budget_reached = floor(($this->spendings_this_month / $this->budget) * 100);

        if ($this->percent_budget_reached >= 100) {
            $this->budget_exceeded = true;
        } elseif ($this->percent_budget_reached >= 75) {
            $this->budget_warning = true;
        }
    }

    public function render()
    {
        return view('livewire.stats');
    }
}
