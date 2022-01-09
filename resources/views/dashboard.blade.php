<x-app-layout>
    <div class="flex text-gray-700">

        <x-dashboard.sidebar />
        <div class="flex flex-col flex-grow">
            <div class="flex items-center flex-shrink-0 h-16 px-8 border-b border-gray-300">
                <div class="text-lg font-medium">
                    {{-- <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full"
                            viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                        <span class="ml-3 text-2xl font-bold">Dashboard</span>
                    </a> --}}
                </div>
                <button
                    class="flex items-center justify-center h-10 px-4 ml-auto text-sm font-medium rounded hover:bg-gray-300">
                    Action 1
                </button>
                <button
                    class="flex items-center justify-center h-10 px-4 ml-2 text-sm font-medium bg-gray-200 rounded hover:bg-gray-300">
                    Action 2
                </button>
                <button class="relative ml-2 text-sm focus:outline-none group">
                    <div class="flex items-center justify-between w-10 h-10 rounded hover:bg-gray-300">
                        <svg class="w-5 h-5 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </div>
                    <div
                        class="absolute right-0 flex-col items-start hidden w-40 pb-1 bg-white border border-gray-300 shadow-lg group-focus:flex">
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Menu Item 1</a>
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Menu Item 1</a>
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Menu Item 1</a>
                    </div>
                </button>
            </div>
            <div class="flex-grow p-6 overflow-auto bg-gray-200">
                <x-dashboard.content />
            </div>
        </div>
        <!-- Component End  -->

    </div>
</x-app-layout>
