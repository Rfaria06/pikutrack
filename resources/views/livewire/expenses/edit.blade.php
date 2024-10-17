<x-card :title="'Edit '.$this->form->name">
    <form wire:submit="save" class="flex flex-col gap-2">

        <label class="input input-bordered w-full flex items-center gap-2">
            Name
            <input wire:model="form.name" type="text" class="grow" />
        </label>

        <label class="input input-bordered w-full flex items-center gap-2">
            Amount
            <input wire:model="form.amount" type="number" step="0.01" class="grow" />
        </label>

        <select wire:model="form.category" class="select select-bordered w-full">
            <option value="" selected disabled>Category</option>
            @foreach(\App\Enums\Category::cases() as $case)
                <option wire:key="{{$case->value}}" value="{{$case->value}}">{{$case->getDisplayName()}}</option>
            @endforeach
        </select>

        <label class="input input-bordered w-full flex items-center gap-2">
            Date
            <input wire:model="form.date" type="datetime-local" class="grow" />
        </label>

        <textarea wire:model="form.description" class="textarea textarea-bordered w-full" placeholder="Description"></textarea>
        <div class="text-white">
            <livewire:quill-text-editor wire:model="form.description" theme="snow" />
        </div>

        <button type="submit" class="btn btn-block btn-primary mb-4">Save</button>
        <a href="{{url()->previous()}}" wire:navigate class="btn btn-block">Cancel</a>
    </form>

    <div class="divider"></div>

    <button type="button" wire:click="delete" wire:confirm="Are you sure?" class="btn btn-block btn-outline btn-warning">Delete</button>
</x-card>