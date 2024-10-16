<div class="card card-compact w-full border-t border-primary bg-base-300 z-0 rounded-t-md shadow-primary mb-3">
    <div class="card-body">
        <h1 class="card-title">
            {{$this->expense->name}}
            <span class="badge badge-primary badge-xl">{{$this->expense->category->getDisplayName()}}</span>
        </h1>
        <div class="flex flex-col gap-2">
            <h2 class="text-lg font-bold mx-auto">{{$this->amount}} CHF</h2>
            <h3 class="text-md mx-auto">{{$this->expense->date->format('d. M Y H:i')}}</h3>
            <div class="divider"></div>
            <a wire:navigate href="{{route('expenses.edit', $this->expense)}}" class="btn btn-block btn-secondary">Edit</a>
            <a href="{{url()->previous()}}" wire:navigate class="btn btn-block">Back</a>
            @if(strlen($this->expense->description))
                <div class="divider"></div>
                <article>{!! nl2br($this->expense->description) !!}</article>
            @endif
        </div>
    </div>
</div>