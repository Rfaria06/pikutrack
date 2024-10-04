<?php

namespace App\Filters;

use App\Enums\Category;
use App\Enums\QuickFilterOption;

class ExpenseFilter
{
    /**
     * Gets the users expenses, and applies the given filters.
     *
     * All parameters can be null, in which case just the users expenses are returned.
     *
     * @param  QuickFilterOption  $quick_filter  The quick filter, or timespan
     * @param  Category  $category  The category
     * @return Query having the filter options applied.
     */
    public function fromFilterOptions(QuickFilterOption $quick_filter = QuickFilterOption::NONE, ?Category $category = null)
    {
        $query = auth()->user()
            ->expenses()
            ->orderBy('date', 'desc');

        if ($quick_filter === QuickFilterOption::MONTH) {
            $query = $query->thisMonth();
        } elseif ($quick_filter === QuickFilterOption::TODAY) {
            $query = $query->today();
        }

        if (! is_null($category)) {
            $query = $query->where('category', $category);
        }

        return $query;
    }
}
