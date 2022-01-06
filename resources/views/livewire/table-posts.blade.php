<div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="w-full text-center rounded-xl">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Id
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Titulo
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Description
                                </th>
                                {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Contenido
                                </th> --}}
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Creador
                                </th>
                                {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Fecha
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Actualizado
                                </th> --}}
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Acciones
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                            @foreach ($posts as $post)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $post->id }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $post->title }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $post->description }}
                                </td>
                                {{-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $post->content }}
                                </td> --}}
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $post->user_id }}
                                </td>
                                {{-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $post->created_at }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $post->updated_at }}
                                </td> --}}
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{-- @livewire('delete-posts', ['post_id' => $post->id, 'postTitle' => $post->title],
                                    key($post->id)) --}}
                                    @livewire('update-posts', ['post_id' => $post->id], key($post->id))
                                </td>
                            </tr class="bg-white border-b">
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
