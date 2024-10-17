<div class="card card-compact w-full border-t border-primary bg-base-300 z-0 rounded-t-md shadow-primary mb-3">
    <a wire:navigate href="{{route('expenses.show', $this->expense->id)}}">
        <div class="card-body">
            <div class="flex flex-row justify-between items-center">
                <h2 class="card-title">{{$this->expense->name}}</h2>
                <div class="badge badge-primary">{{$this->expense->category->getDisplayName()}}</div>
            </div>
            <div class="w-full flex flex-row justify-between items-center">
                <span>CHF {{$this->amount}}</span>
                <time>{{$this->time_diff}}</time>
            </div>
        </div>
    </a>
</div>