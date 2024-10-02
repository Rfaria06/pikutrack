<?php

namespace App\Livewire;

use App\Models\Expense;
use Livewire\Component;

class Stats extends Component
{
    private int $percentSpendinglimitReached = 0;

    private int $spendingsThisMonth = 0;

    private int $budget = 0;

    private bool $budgetExceeded = false;

    private bool $budgetWarning = false;

    private string $currentMonth = '';

    /**
     * @param  Expense[]  $expenses
     */
    public function mount($expenses)
    {
        $this->budget = auth()->user()->spending_limit;
        $this->currentMonth = date('F');
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
            $this->spendingsThisMonth += $expense->amount;
        }
        $this->percentSpendinglimitReached = floor(($this->spendingsThisMonth / $this->budget) * 100);

        if ($this->percentSpendinglimitReached >= 100) {
            $this->budgetExceeded = true;
        } elseif ($this->percentSpendinglimitReached >= 75) {
            $this->budgetWarning = true;
        }
    }

    public function render()
    {
        return view('livewire.stats');
    }
}
