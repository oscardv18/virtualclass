<div>
    <i class="fas fa-trash fa-1x cursor-pointer" wire:click="$set('open', true)" style="color: rgb(226, 31, 25)"></i>

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name="title">
            Eliminar Post
        </x-slot>
        <x-slot name="content">
            <x-jet-label class="mt-4" for="title"
                value="{{ __('Estas seguro que deseas eliminar el post seleccionado?:') }}" />

            <span>{{ $post_id }}</span>
            <span>{{ $post_title }}</span>
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
