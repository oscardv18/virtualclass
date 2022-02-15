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
        {!! Form::open(['method' => 'POST', 'action' => 'PostController@store', 'route' => 'posts.store']) !!}
            <x-slot name="content">
                {!! Form::token() !!}
                {{-- title of post --}}
                <div class="form-group">
                    {!! Form::label('title', __("Título:"), ['class' => 'mt-2 block font-medium text-sm text-gray-700']) !!}
                    {!! Form::text('title', null, ['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full', 'id' => 'title']) !!}
                    <x-jet-input-error for="title" />
                </div>
                {{-- description of post --}}
                <div class="form-group">
                    {!! Form::label('description', __("Descripción"), ['class' => 'mt-2 block font-medium text-sm text-gray-700']) !!}
                    {!! Form::text('description', null, ['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full', 'id' => 'description']) !!}
                    <x-jet-input-error for="description" />
                </div>
                {{-- content of post --}}
                <div class="form-group">
                    {!! Form::label('content', __("Contenido:"), ['class' => 'mt-2 block font-medium text-sm text-gray-700']) !!}
                    {!! Form::textarea('content', null, ['class' => 'w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'id' => 'content', 'rows' => '6']) !!}
                    <x-jet-input-error for="content" />
                </div>
                {{-- post type --}}
                <div class="form-group">
                    {!! Form::label('posttype', __('ELija el tipo de Publicacion:'), ['class' => 'mt-2 mb-2 px-2 block font-medium text-sm text-gray-700']) !!}
                    <div class="flex" name="posttype" id="posttype">
                        <div>
                            <div class="flex flex-row items-center form-check">
                                {!! Form::radio('information', 1, false, ['id' => 'information', 'wire:model' => 'post_type_id']) !!}
                                {!! Form::label('information', __("Información"), ['class' => 'mt-2 px-2 block font-medium text-sm text-gray-700']) !!}
                            </div>
                            <div class="flex flex-row items-center form-check">
                                {!! Form::radio('evaluation', 2, false, ['id' => 'evaluation', 'wire:model' => 'post_type_id']) !!}
                                {!! Form::label('evaluation', __("Evaluación"), ['class' => 'mt-2 px-2 block font-medium text-sm text-gray-700']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- files of post --}}
                <div class="form-group">
                    <div class="mt-2 text-sm">
                        {!! Form::label("file", __("Suba los archivos que desee tener en su Post:"), ['class' => 'mt-2 block font-medium text-sm text-gray-700']) !!}
                        <div>
                            <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                            {{-- <x-jet-input class="mb-2" name="file" id="file" type="file" wire:model="files" multiple/> --}}
                            {!! Form::file("file", ['class' => 'mb-2', 'id' => $identificator, 'multiple', "wire:model" => "files"]) !!}
                                <!-- Light mode -->
                                <div x-show="isUploading" class="w-full bg-white rounded shadow ">
                                    <div class="h-6 mt-5 bg-gray-200 rounded" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="flex flex-row items-center justify-center h-6 text-sm text-center text-white transition bg-green-400 rounded" x-bind:style="`width: ${progress}%; transition: width 2s;`" x-text="`${progress}%`">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
            {{-- pie del modal --}}
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('open', false)">
                    {{ __('Cancelar') }}
                </x-jet-button>
                <x-jet-danger-button wire:loading.class="hidden" wire:click='insert'>
                        {{ __('Postear') }}
                </x-jet-button>
                {!! Form::button($text, [$options]) !!}
                <div wire:loading wire:target="insert">
                    <span>Creando Post...</span>
                </div>
            </x-slot>
        {!! Form::close() !!}
    </x-jet-dialog-modal>
</div>
