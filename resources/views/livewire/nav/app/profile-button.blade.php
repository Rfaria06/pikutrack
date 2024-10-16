<a href="{{route('settings')}}" wire:navigate class="btn btn-ghost btn-circle avatar">
    @if($this->avatar_url)
        <img src="{{$this->avatar_url}}" class="object-cover rounded-full" />
    @else
        {{$this->initials}}
    @endif
</a>