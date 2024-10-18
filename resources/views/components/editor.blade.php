<div x-data="setupEditor($wire.entangle('{{$attributes->wire('model')->value()}}'))" x-init="() => init($refs.element)">
    <template x-if="editor">
        <div class="menu">
            <button type="button" @click="editor().chain().focus().toggleBold().run()" :class="{ 'is-active': proxy.isActive('bold') }">
                Bold
            </button>
        </div>
    </template>

    <div x-ref="element"></div>
</div>