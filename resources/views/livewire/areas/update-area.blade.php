<div>
    <a href="#" class="text-blue-500 hover:text-blue-600" wire:click="$set('open', true)">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
        </svg>
        <p>Edit</p>
    </a>

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name="title">
            Editar Post
        </x-slot>
        <x-slot name="content">
            {{-- SECCION DEL NOMBRE --}}
            <x-jet-label class="mt-4" for="area_name" value="{{ __('Nombre:') }}" />
            <x-jet-input class="w-full" id="area_name" name="area_name" type="text" wire:model.defer='area_name' required />
            <x-jet-input-error for="title" />

            {{-- SECCION DE LA DESCRIPCION --}}
            <x-jet-label class="mt-4" for="description" value="{{ __('Descripcion:') }}" />
            <x-jet-input class="w-full" id="description" name="description" type="text" wire:model.defer='description'
                required />
            <x-jet-input-error for="description" />
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
