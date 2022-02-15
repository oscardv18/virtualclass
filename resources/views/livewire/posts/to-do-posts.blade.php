<div class="overflow-hidden bg-white border-b border-gray-200 shadow sm:rounded-lg">
    <div class="flex flex-col pb-4 items-center mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
        <h3 class="text-base text-gray-600 font-semibold">Busqueda en Tiempo Real</h3>
        <input id="post" type="search"
            class="px-4 py-2 text-gray-700 bg-white border rounded-md sm:mx-2 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
            placeholder="Buscar" wire:model='search'>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                    <div class="flex cursor-pointer">
                        <span class="mr-2">ID</span>
                    </div>
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                    <div class="flex cursor-pointer">
                        <span class="mr-2">TITULO</span>
                    </div>
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                    <div class="flex cursor-pointer">
                        <span class="mr-2">TIPO</span>
                    </div>
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                    <div class="flex cursor-pointer">
                        <span class="mr-2">CREADOR</span>
                    </div>
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
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
                        {{ $post->id }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                        {{ $post->title }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                        @foreach ($post_type as $type)
                            @if($post->post_type_id == $type->id)
                                {{ $type->type }}
                            @endif
                        @endforeach
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                        @if($post->user_id != null)
                            {{ $post->user_id }}
                        @else
                            {{ __("Sin autor") }}
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                        <a href="#">Ver más</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pt-4 pb-4 pl-4">
        {{ $posts->links() }}
    </div>
</div>
