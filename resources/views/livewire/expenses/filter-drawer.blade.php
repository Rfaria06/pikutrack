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

            <form wire:submit="applyFilter">
                <div class="flex flex-col gap-2">
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Quick filter</span>
                        </div>
                        <select wire:model="quick_filter" class="select select-secondary w-full max-w-xs">
                          <option value="0">None</option>
                          <option value="1">This month</option>
                          <option value="2">Today</option>
                        </select>
                    </label>
                    <button type="submit" class="btn btn-block btn-primary">Apply</button>
                </div>
            </form>
        </ul>
    </div>
</div>
