<div class="card card-compact w-full border-t border-primary bg-base-300 rounded-t-md shadow-primary mb-3">
  <a wire:navigate href="{{route('expenses.show', $this->expense->id)}}">
    <div class="card-body">
      <h2 class="card-title">{{$this->expense->name}}</h2>
      <div class="w-full flex flex-row justify-between items-center">
        <span>CHF {{$this->expense->amount}}</span>
        <time>{{$this->time_diff}}</time>
      </div>
    </div>
  </a>
</div>
