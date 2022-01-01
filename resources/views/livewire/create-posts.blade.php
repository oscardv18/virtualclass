<div>
    <x-jet-button wire:click="$set('open', true)">Crear Publicación</x-jet-button>

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name="title">
            Crear Publicación
        </x-slot>
        <x-slot name="content">
            <x-jet-label class="mt-4" for="title" value="{{ __('Titulo:') }}" />
            <x-jet-input class="w-full" id="title" name="title" type="text" wire:model.defer='title' />

            <x-jet-label class="mt-4" for="description" value="{{ __('Descripción:') }}" />
            <x-jet-input class="w-full" id="description" name="description" type="text" wire:model.defer='description' />

            <x-jet-label class="mt-4" for="content" value="{{ __('Contenido:') }}" />
            <textarea class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full" name="content" id="content" rows="6" wire:model.defer='content'></textarea>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                {{ __('Cancelar') }}
            </x-jet-button>
            <x-jet-danger-button wire:click='insert'>
                {{ __('Postear') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
