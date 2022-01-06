<div>
    {{-- <x-jet-button wire:click="$set('open', true)">Crear Publicación</x-jet-button> --}}
    {{-- <span style="color: green"> --}}
        <i class="fas fa-plus-square fa-1x cursor-pointer" wire:click="$set('open', true)" style="color: rgb(69, 136, 2)"> Crear</i>
        {{-- <span class="text-gray-900 font-black">Crear Post</span> --}}
    {{-- </span> --}}

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name="title">
            Crear Publicación
        </x-slot>
        <x-slot name="content">
            <x-jet-label class="mt-4" for="title" value="{{ __('Titulo:') }}" />
            <x-jet-input class="w-full" id="title" name="title" type="text" wire:model.defer='title' />
                <x-jet-input-error for="title" />

            <x-jet-label class="mt-4" for="description" value="{{ __('Descripción:') }}" />
            <x-jet-input class="w-full" id="description" name="description" type="text" wire:model.defer='description' />
                <x-jet-input-error for="description" />

            <x-jet-label class="mt-4" for="content" value="{{ __('Contenido:') }}" />
            <textarea class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full" name="content" id="content" rows="6" wire:model.defer='content'></textarea>
                <x-jet-input-error for="content" />
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                {{ __('Cancelar') }}
            </x-jet-button>
            <x-jet-danger-button wire:loading.class="hidden" wire:click='insert'>
                {{ __('Postear') }}
            </x-jet-button>
            <div wire:loading wire:target="insert">
                <span>
                    Creando Post...
                </span>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
