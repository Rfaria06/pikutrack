<div x-data="setupEditor(
    $wire.entangle('{{$attributes->wire('model')->value()}}')
  )" x-init="() => init($refs.editor)" wire:ignore {{$attributes->whereDoesntStartWith('wire:model')}}>

    <button type="button" class="btn" onclick="editor.chain().focus().toggleBold().run()">Bold</button>
    <div x-ref="editor"></div>
</div>