<div class="p-4 bg-white rounded-lg shadow-lg">
    <h1 class="text-base font-bold">Table</h1>
    <div class="mt-4">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto">
                <div class="inline-block min-w-full py-2 align-middle">
                    <div
                        class="overflow-hidden bg-white border-b border-gray-200 shadow sm:rounded-lg">
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
                                            <span class="mr-2">Area</span>
                                        </div>
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                        <div class="flex cursor-pointer">
                                            <span class="mr-2">Descripción</span>
                                        </div>
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                        <div class="flex cursor-pointer">
                                            <span class="mr-2">ACCIONES</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($areas as $area)
                                    <tr>
                                        <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                            <p>{{ $area->id }}</p>
                                            {{-- <p class="text-xs text-gray-400">PC & Laptop
                                            </p> --}}
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                            <p>{{ $area->area_name }}</p>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                            <div class="flex">
                                                {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-5 h-5 mr-1" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg> --}}
                                                <p>{{ $area->description }}</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                            <div class="flex space-x-4">
                                                @livewire('areas.update-area', ['id' => $area->id, 'name' => $area->area_name, 'description' => $area->description], key($area->id))
                                                @livewire('areas.delete-area', ['id' => $area->id, 'name' => $area->area_name], key($area->id))
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
