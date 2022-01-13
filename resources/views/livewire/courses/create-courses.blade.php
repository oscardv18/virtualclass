<div>
    <button class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-200 transform bg-gray-700 rounded-lg hover:bg-gray-600 focus:bg-gray-600 focus:outline-none"  wire:click="$set('open', true)">Crear</button>

        <x-jet-dialog-modal wire:model='open'>
            {{-- Titulo del modal --}}
            <x-slot name="title">
                Crear Clase
            </x-slot>

            {{-- cotenido del modal --}}
            <x-slot name="content">
                {{-- Titulo de la clase --}}
                <div>
                    <x-jet-label class="mt-4" for="name" value="{{ __('Nombre:') }}" />
                    <x-jet-input class="w-full" id="name" name="name" type="text" wire:model.defer='name' />
                    <x-jet-input-error for="name" />
                </div>
                {{-- fin del titulo --}}

                {{-- Periodo de la clase --}}
                <div>
                    <x-jet-label class="mt-4" for="period" value="{{ __('Periodo:') }}" />
                    <x-jet-input class="w-full" id="period" name="period" type="text"
                        wire:model.defer='period' />
                    <x-jet-input-error for="period" />
                </div>
                {{-- fin del periodo --}}

                {{-- Area Id de la clase --}}
                <div>
                    <x-jet-label class="mt-4" for="area_id" value="{{ __('ID del area a la que pertenece:') }}" />
                    <x-jet-input class="w-full" id="area_id" name="area_id" type="text"
                        wire:model.defer='area_id' />
                    <x-jet-input-error for="area_id" />
                </div>
                {{-- fin del area id --}}
            </x-slot>
            {{-- pie del modal --}}
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('open', false)">
                    {{ __('Cancelar') }}
                    </x-jet-button>
                    <x-jet-danger-button wire:loading.class="hidden" wire:click='insert'>
                        {{ __('Crear') }}
                        </x-jet-button>
                        <div wire:loading wire:target="insert">
                            <span>Creando CLase...</span>
                        </div>
            </x-slot>
        </x-jet-dialog-modal>
</div>
