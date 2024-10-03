<div class="drawer z-[1]">
    <input id="expense-filter-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <label for="expense-filter-drawer" class="btn btn-block btn-primary drawer-button mb-3">Filter</label>
    </div>
    <div class="drawer-side">
        <label for="expense-filter-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
            <h3 class="font-bold text-lg">Filter options</h3>
            <div class="divider"></div>

            <div class="flex flex-col gap-2">
                <button type="button" wire:click="$dispatch('toggle-filter-this-month')" class="btn btn-block btn-secondary {{$this->filterThisMonthClassName}}">This month</button>
                <button type="button" wire:click="$dispatch('toggle-filter-today')" class="btn btn-block btn-secondary {{$this->filterTodayClassName}}">Today</button>
            </div>
        </ul>
    </div>
</div>