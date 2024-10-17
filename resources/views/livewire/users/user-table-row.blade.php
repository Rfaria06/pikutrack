<tr>
    <td>
        <div class="flex items-center gap-3">
            @if($avatar = $this->user->avatar)
                <div class="avatar">
                    <div class="mask mask-squircle h-12 w-12">
                        <img src={{Storage::url($avatar)}} />
                    </div>
                </div>
            @endif
            <div>
                <div class="font-bold">{{$this->user->name}}</div>
                @if($this->is_self)
                    <div class="badge badge-primary badge-outline">You</div>
                @endif
            </div>
        </div>
    </td>
    <td>
        {{$this->user->email}}
    </td>
    <td>
        <select wire:model.live="user_type" class="select w-full" {{$this->is_self ? "disabled" : null}}>
            @foreach(App\Enums\UserType::cases() as $case)
                <option wire:key="{{$case->value}}" value="{{$case->value}}">{{$case->getDisplayName()}}</option>
            @endforeach
        </select>
    </td>
    <td>
        <button wire:click="deleteUser" class="btn btn-warning" wire:confirm><i class="fa-solid fa-trash"></i></button>
    </td>
</tr>