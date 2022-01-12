<div>
    <button wire:click="$set('open', true)" class="flex flex-row px-2 py-2 mt-10 text-sm text-white bg-green-500 border-0 rounded items-centerflex-shrink-0 focus:outline-none hover:bg-red-600 sm:mt-0">
        <i class="cursor-pointer fas fa-plus-square fa-1x"> Crear</i>
    </button>

    <x-jet-dialog-modal wire:model='open'>
        {{-- Titulo del modal --}}
        <x-slot name="title">
            Crear Publicación
        </x-slot>
        {{-- cotenido del modal --}}
        <x-slot name="content">
            {{-- Titulo del Post --}}
            <div>
                <x-jet-label class="mt-4" for="title" value="{{ __('Titulo:') }}" />
                <x-jet-input class="w-full" id="title" name="title" type="text" wire:model.defer='title' />
                <x-jet-input-error for="title" />
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

            {{-- Contenido del Post --}}
            <div>
                <x-jet-label class="mt-4" for="content" value="{{ __('Contenido:') }}" />
                <textarea
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    name="content" id="content" rows="6" wire:model.defer='content'></textarea>
                <x-jet-input-error for="content" />
            </div>
            {{-- fin del contenido --}}

            {{-- Post Type --}}
            <div>
                <x-jet-label class="mt-4 mb-2" for="posttype" value="{{ __('ELija el tipo de Publicacion:') }}" />
                <div class="flex" name="posttype" id="posttype">
                    <div>
                        <div class="flex flex-row items-center form-check">
                            <input type="radio" name="information" id="information" value="1" wire:model="post_type_id">
                            <x-jet-label class="px-2" for="information" value="{{ __('Información') }}" />
                        </div>
                        <div class="flex flex-row items-center form-check">
                            <input type="radio" name="evaluation" id="evaluation" value="2" wire:model="post_type_id">
                            <x-jet-label class="px-2" for="evaluation" value="{{ __('Evaluación') }}" />
                        </div>
                    </div>
                </div>
            </div>
            {{-- fin del post type --}}

            {{-- FIle Upload --}}
            <div class="mt-2 text-sm">
                <x-jet-label for="file" value="{{ __("Suba los archivos que desee tener en su Post:") }}" />
                {{-- <x-progress-bar /> --}}
                <div>
                    <!-- Define the width model within parent div -->
                    <div x-data="{ isUploading: false, progress: 0 }"
                    x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false"
                    x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                    >
                    <x-jet-input class="mb-2" name="file" id="{{ $identificator }}" type="file" wire:model="files" multiple/>
                        <!-- Light mode -->
                        <div x-show="isUploading" class="w-full bg-white rounded shadow ">
                            <div class="h-6 mt-5 bg-gray-200 rounded" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-row items-center justify-center h-6 text-sm text-center text-white transition bg-green-400 rounded"
                                    x-bind:style="`width: ${progress}%; transition: width 2s;`" x-text="`${progress}%`">
                                </div>
                            </div>
                            <!-- End Regular with text version -->
                        </div>
                        {{-- <div class="mx-32 mt-10">
                            Type a value
                            <input class="border border-gray-500 rounded" type="number" class="form-input" x-model="width" min="1" max="100">
                        </div> --}}
                    </div>
                </div>

            </div>

            <div class="mt-2">
                @if ($files)
                    @foreach ($files as $file)
                        <img src="{{ $file->temporaryUrl() }}">
                    @endforeach
                @endif
            </div>
            {{-- FIn del file Upload --}}
        </x-slot>
        {{-- pie del modal --}}
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                {{ __('Cancelar') }}
            </x-jet-button>
            <x-jet-danger-button wire:loading.class="hidden" wire:click='insert'>
                    {{ __('Postear') }}
            </x-jet-button>
            <div wire:loading wire:target="insert">
                <span>Creando Post...</span>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
