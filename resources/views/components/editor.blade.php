<div x-data="setupEditor(
    $wire.entangle('{{$attributes->wire('model')->value()}}')
  )" x-init="() => init($refs.editor)" wire:ignore {{$attributes->whereDoesntStartWith('wire:model')}}>

    <div x-ref="editor"></div>
</div>