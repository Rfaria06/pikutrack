<div class="stats shadow max-w-full bg-base-300 mb-3">
  <div class="stat">
    <div class="stat-title">Budget reached</div>
    <div class="stat-figure text-secondary">
      <i class="fa-solid fa-percent fa-2x"></i>
    </div>
    <div class="stat-value {{($this->budget_exceeded ? 'text-error' : $this->budget_warning) ? 'text-warning' : 'text-success'}}">{{$this->percent_budget_reached}}</div>
    <div class="stat-desc">{{$this->current_month}}</div>
  </div>

  <div class="stat">
    <div class="stat-title">Spent in {{$this->current_month}}</div>
    <div class="stat-figure text-secondary">
      <i class="fa-solid fa-coins fa-2x"></i>
    </div>
    <div class="stat-value">{{$this->spendings_this_month / 100}}</div>
    <div class="stat-desc">CHF</div>
  </div>

  <div class="stat">
    <div class="stat-title">Budget</div>
    <div class="stat-figure text-secondary">
      <i class="fa-solid fa-wallet fa-2x"></i>
    </div>
    <div class="stat-value">{{$this->budget / 100}}</div>
    <div class="stat-desc">CHF</div>
  </div>
</div>
