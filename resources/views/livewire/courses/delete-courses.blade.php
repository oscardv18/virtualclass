<div>
    <a href="#" class="text-red-500 hover:text-red-600" wire:click="$set('open', true)" >
        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 ml-3 mr-1" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2"
                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
        <p>Eliminar</p>
    </a>

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name="title">
            Eliminar Clase
        </x-slot>
        <x-slot name="content">
            <x-jet-label class="mt-4" for="course_name"
                value="{{ __('Estas seguro que deseas eliminar la clase seleccionada?:') }}" />

            <span>{{ $course_id }}</span>
            <span>{{ $course_name }}</span>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                {{ __('Cancelar') }}
                </x-jet-button>
            <x-jet-danger-button wire:click='delete'>
                {{ __('Eliminar') }}
            </x-jet-button>
            <div wire:loading wire:loading.class="hidden" wire:target="delete">
                <span>
                    Eliminando...
                </span>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
