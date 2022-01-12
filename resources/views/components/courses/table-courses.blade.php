<x-app-layout>
    <div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">
        <x-dashboard.aside-dash />
        <x-dashboard.main-template>
            <x-slot name="content">
                <div class="flex items-center py-4 overflow-y-auto whitespace-nowrap">
                    <a href="{{ route('dashboard') }}" class="text-gray-600 dark:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                    </a>

                    <span class="mx-5 text-gray-500 dark:text-gray-300">
                        /
                    </span>

                    <a href="{{ route('dashboard') }}" class="text-gray-600 dark:text-gray-200 hover:underline">
                        Dashboard
                    </a>

                    <span class="mx-5 text-gray-500 dark:text-gray-300">
                        /
                    </span>

                    <a href="{{ route('table-courses') }}" class="text-gray-600 dark:text-gray-200 hover:underline">
                        Clases
                    </a>

                    <span class="mx-5 text-gray-500 dark:text-gray-300">
                        /
                    </span>

                    <a href="{{ route('table-courses') }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                        Administrar
                    </a>
                </div>
                <div class="col-span-12 mt-5">
                    <div class="grid grid-cols-1 gap-2 lg:grid-cols-1">
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
                                                                    <span class="mr-2">PRODUCT NAME</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">Stock</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">STATUS</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">ACTION</span>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y divide-gray-200">
                                                        <tr>
                                                            <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                                                <p>Apple MacBook Pro 13</p>
                                                                <p class="text-xs text-gray-400">PC & Laptop
                                                                </p>
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                                                <p>77</p>
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                                                <div class="flex text-green-500">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-5 h-5 mr-1" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                    </svg>
                                                                    <p>Active</p>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                                                <div class="flex space-x-4">
                                                                    <a href="#"
                                                                        class="text-blue-500 hover:text-blue-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="w-5 h-5 mr-1" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                        </svg>
                                                                        <p>Edit</p>
                                                                    </a>
                                                                    <a href="#" class="text-red-500 hover:text-red-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="w-5 h-5 ml-3 mr-1" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>
                                                                        <p>Delete</p>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-dashboard.main-template>
    </div>
</x-app-layout>
