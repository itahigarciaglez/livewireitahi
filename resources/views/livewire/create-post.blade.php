<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        crear nuevo post
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nuevo post
        </x-slot>
        <x-slot name="content">
            @if ($image)
                <img src={{$image->temporaryUrl()}}>
            @endif
            <div class="mb-4">
                <x-jet-label value="Título del post"/>
                <x-jet-input wire:model='title' type="text" class="w-full"/>
                <x-jet-input-error for="title" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Contenido del post"/>
                <textarea wire:model='content' rows="6" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
                <x-jet-input-error for="content" />
            </div>
            <div>
                <input type="file" wire:model="image">
                <x-jet-input-error for="image" />

            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                Crear post
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
