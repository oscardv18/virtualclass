<div>
    <button class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-200 transform bg-gray-700 rounded-lg hover:bg-gray-600 focus:bg-gray-600 focus:outline-none"  wire:click="$set('open', true)">Crear</button>
    <x-jet-dialog-modal wire:model='open'>
        {{-- Titulo del modal --}}
        <x-slot name="title">
            Crear Area (Carrera, Año, Grado, Nivel)
        </x-slot>
        {{-- cotenido del modal --}}
        <x-slot name="content">
            {{-- Titulo del Post --}}
            <div>
                <x-jet-label class="mt-4" for="area_name" value="{{ __('Nombre:') }}" />
                <x-jet-input class="w-full" id="area_name" name="area_name" type="text" wire:model.defer='area_name' />
                <x-jet-input-error for="area_name" />
            </div>
            {{-- fin del titulo --}}

            {{-- Descripcion del post --}}
            <div>
                <x-jet-label class="mt-4" for="description" value="{{ __('Descripción:') }}" />
                <x-jet-input class="w-full" id="description" name="description" type="text"
                    wire:model.defer='description' />
                <x-jet-input-error for="description" />
            </div>
            {{-- fin de la descripcion --}}
        </x-slot>
        {{-- pie del modal --}}
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                {{ __('Cancelar') }}
                </x-jet-button>
                <x-jet-danger-button wire:loading.class="hidden" wire:click='save'>
                    {{ __('Crear') }}
                    </x-jet-button>
                    <div wire:loading wire:target="save">
                        <span>Creando Area...</span>
                    </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
