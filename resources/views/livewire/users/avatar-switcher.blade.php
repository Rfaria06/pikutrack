<form wire:submit="save">
    <div class="mb-4">
        <input type="file" wire:model="avatar" class="file-input file-input-bordered w-full">
    </div>

    @error('avatar')
        <div class="text-red-500">{{$message}}</div>
    @enderror

    @if($avatar instanceof \Livewire\TemporaryUploadedFile)
        <!-- Show preview of newly uploaded avatar -->
        <div class="mt-2">
            <img src="{{$avatar->temporaryUrl()}}" class="object-cover w-full" alt="Preview">
        </div>
    @endif


    <button type="submit" class="btn btn-block btn-secondary">Save Avatar</button>
</form>