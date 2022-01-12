<div class="overflow-hidden bg-white border-b border-gray-200 shadow sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                    <div class="flex cursor-pointer">
                        <span class="mr-2">ID</span>
                    </div>
                </th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                    <div class="flex cursor-pointer">
                        <span class="mr-2">TITULO</span>
                    </div>
                </th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                    <div class="flex cursor-pointer">
                        <span class="mr-2">ID DEL CREADOR</span>
                    </div>
                </th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                    <div class="flex cursor-pointer">
                        <span class="mr-2">ID DE TIPO</span>
                    </div>
                </th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                    <div class="flex cursor-pointer">
                        <span class="mr-2">Acciones</span>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($posts as $post)
                <tr>
                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                        <p>{{ $post->id }}</p>
                        {{-- <p class="text-xs text-gray-400">PC & Laptop
                        </p> --}}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                        <p>{{ $post->title }}</p>
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                        <p>{{ $post->user_id }}</p>
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                        <p>{{ $post->post_type_id }}</p>
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                        <div class="flex space-x-4">
                            @livewire('update-posts', ['id' => $post->id, 'title' => $post->title, 'description' => $post->description, 'content' => $post->content], key($post->id))
                            @livewire('delete-posts', ['post_id' => $post->id, 'postTitle' => $post->title], key($post->id))
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
