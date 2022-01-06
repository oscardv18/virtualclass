<div>
    <i class="fas fa-pen-square fa-1x cursor-pointer" wire:click="$set('open', true)" style="color: rgb(224, 221, 0)"> Editar</i>

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name="title">
            Editar Post
        </x-slot>
        <x-slot name="content">
            {{-- SECCION DEL TITULO --}}
            <x-jet-label class="mt-4" for="title" value="{{ __('Titulo:') }}" />
            <x-jet-input class="w-full" id="title" name="title" type="text" wire:model.defer='title' required/>
            <x-jet-input-error for="title" />

            {{-- SECCION DE LA DESCRIPCION --}}
            <x-jet-label class="mt-4" for="description" value="{{ __('Descripcion:') }}" />
            <x-jet-input class="w-full" id="description" name="description" type="text" wire:model.defer='description' required/>
            <x-jet-input-error for="description" />

            {{-- SECCION DEL CONTENIDO --}}
            <x-jet-label class="mt-4" for="content" value="{{ __('Contenido:') }}" />
            <textarea class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full" name="content" id="content" rows="6" wire:model.defer='content' required></textarea>
            <x-jet-input-error for="content" />
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                {{ __('Cancelar') }}
                </x-jet-button>
            <x-jet-danger-button wire:loading.class="hidden" wire:click='edit'>
                {{ __('Editar') }}
            </x-jet-button>
            <div wire:loading wire:target="edit">
                <span>
                    Guardando Cambios...
                </span>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
