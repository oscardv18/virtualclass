<div>
    <section class="bg-white dark:bg-gray-800">
        <div class="max-w-3xl px-6 py-4 mx-auto text-center">
            <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">¿Deseas Buscar tus materias?
            </h1>
            <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">Escribe abajo el nombre de la
                materia! Y nuestro Buscador hará el resto.</p>

            <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
                <input id="area" type="search"
                    class="px-4 py-2 text-gray-700 bg-white border rounded-md sm:mx-2 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                    placeholder="Asignatura" wire:model='area'>
            </div>
        </div>
    </section>
    @foreach ($areas as $area)
        <div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 mt-4">
            <div class="p-6">
                <div>
                    <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Area</span>
                    <a href="#"
                        class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform dark:text-white hover:text-gray-600 hover:underline">
                        {{ $area->area_name }}</a>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ $area->description }}</p>
                </div>

                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <img class="object-cover h-10 rounded-full"
                                src="https://images.unsplash.com/photo-1586287011575-a23134f797f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=48&q=60"
                                alt="Avatar">
                            <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200">{{ Auth::user()->name }}</a>
                        </div>
                        <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">{{ $area->created_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
