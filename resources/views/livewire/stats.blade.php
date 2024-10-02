<div class="stats shadow max-w-full bg-base-300 mb-3">
  <div class="stat">
    <div class="stat-title">Budget reached</div>
    <div class="stat-figure text-secondary">
      <i class="fa-solid fa-percent fa-2x"></i>
    </div>
    <div class="stat-value {{($this->budgetExceeded ? 'text-error' : $this->budgetWarning) ? 'text-warning' : 'text-success'}}">{{$this->percentSpendinglimitReached}}</div>
    <div class="stat-desc">{{$this->currentMonth}}</div>
  </div>

  <div class="stat">
    <div class="stat-title">Spent in {{$this->currentMonth}}</div>
    <div class="stat-figure text-secondary">
      <i class="fa-solid fa-coins fa-2x"></i>
    </div>
    <div class="stat-value">{{$this->spendingsThisMonth / 100}}</div>
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
