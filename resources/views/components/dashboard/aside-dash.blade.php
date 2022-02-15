<div>
    <!-- Desktop sidebar -->
    <aside class="z-20 flex-shrink-0 hidden pl-2 overflow-y-auto bg-gray-800 w-60 md:block">
        <div>
            <div class="text-white">
                <div class="flex p-2 bg-gray-800">
                    <div class="flex items-center px-2 py-3">
                        <svg class="w-8 h-8" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z"
                                fill="#6875F5" />
                            <path
                                d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z"
                                fill="#6875F5" />
                        </svg>
                        <p class="ml-2 font-bold">{{ config('app.name', 'Laravel') }}</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img class="hidden object-cover w-24 h-24 mr-2 border-4 border-green-400 rounded-full sm:block"
                            src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                        @endif
                        <p class="w-24 pt-2 text-base font-bold text-center text-gray-400">{{ Auth::user()->name }}</p>
                    </div>
                </div>
                <div>
                    <ul class="mt-6 leading-10">
                        <li class="relative px-2 py-1 ">
                            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer hover:text-green-500"
                                href="{{ route('dashboard') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span class="ml-4">DASHBOARD</span>
                            </a>
                        </li>
                        <li class="relative px-2 py-1" x-data="{ Open : false  }">
                            <div class="inline-flex items-center justify-between w-full text-base font-semibold text-gray-500 transition-colors duration-150 cursor-pointer hover:text-yellow-400"
                                x-on:click="Open = !Open" x-on:click.away="Open = false">
                                <span
                                    class="inline-flex items-center text-sm font-semibold text-white hover:text-green-400">
                                    <i class="fas fa-mail-bulk"></i>
                                    <span class="ml-4">PUBLICACIONES</span>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" x-show="!Open" class="w-4 h-4 ml-1 text-white"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" x-show="Open" class="w-4 h-4 ml-1 text-white"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>

                            <div x-show.transition="Open" style="display:none;">
                                <ul x-transition:enter="transition-all ease-in-out duration-300"
                                    x-transition:enter-start="opacity-25 max-h-0"
                                    x-transition:enter-end="opacity-100 max-h-xl"
                                    x-transition:leave="transition-all ease-in-out duration-300"
                                    x-transition:leave-start="opacity-100 max-h-xl"
                                    x-transition:leave-end="opacity-0 max-h-0"
                                    class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium bg-green-400 rounded-md shadow-inner"
                                    aria-label="submenu">

                                    <li class="px-2 py-1 text-white transition-colors duration-150">
                                        <div class="px-1 rounded-md hover:text-gray-800 hover:bg-green-100">
                                            <div class="flex items-center">
                                                <i class="fas fa-binoculars"></i>
                                                <a href="{{ route('posts.index') }}"
                                                    class="w-full ml-2 text-sm font-semibold text-white hover:text-gray-800">Ver</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="px-2 py-1 text-white transition-colors duration-150">
                                        <div class="px-1 rounded-md hover:text-gray-800 hover:bg-green-100">
                                            <div class="flex items-center">
                                                <i class="fas fa-plus-square"></i>
                                                <a href="{{ route('posts.create') }}"
                                                    class="w-full ml-2 text-sm font-semibold text-white hover:text-gray-800">Crear</a>
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li class="px-2 py-1 text-white transition-colors duration-150">
                                        <div class="px-1 rounded-md hover:text-gray-800 hover:bg-green-100">
                                            <div class="flex items-center">
                                                <i class="fas fa-table"></i>
                                                <a href="{{ route('table') }}"
                                                    class="w-full ml-2 text-sm font-semibold text-white hover:text-gray-800">Administrar</a>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>

    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">

    </div>

    <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-gray-900 dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu">
        <div>
            <div class="text-white">
                <div class="flex p-2 bg-gray-800">
                    <div class="flex items-center px-2 py-3">
                        <svg class="w-8 h-8" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z"
                                fill="#6875F5" />
                            <path
                                d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z"
                                fill="#6875F5" />
                        </svg>
                        <p class="ml-2 font-bold">{{ config('app.name', 'Laravel') }}</p>
                    </div>
                </div>
                <div>
                    <ul class="mt-6 leading-10">
                        <li class="relative px-2 py-1 ">
                            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer hover:text-green-500"
                                href="{{ route('dashboard') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span class="ml-4">DASHBOARD</span>
                            </a>
                        </li>
                        <li class="relative px-2 py-1" x-data="{ Open : false  }">
                            <div class="inline-flex items-center justify-between w-full text-base font-semibold text-gray-500 transition-colors duration-150 cursor-pointer hover:text-yellow-400"
                                x-on:click="Open = !Open" x-on:click.away="Open = false">
                                <span
                                    class="inline-flex items-center text-sm font-semibold text-white hover:text-green-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                                    </svg>
                                    <span class="ml-4">PUBLICACIONES</span>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" x-show="!Open" class="w-4 h-4 ml-1 text-white"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" x-show="Open" class="w-4 h-4 ml-1 text-white"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>

                            <div x-show.transition="Open" style="display:none;">
                                <ul x-transition:enter="transition-all ease-in-out duration-300"
                                    x-transition:enter-start="opacity-25 max-h-0"
                                    x-transition:enter-end="opacity-100 max-h-xl"
                                    x-transition:leave="transition-all ease-in-out duration-300"
                                    x-transition:leave-start="opacity-100 max-h-xl"
                                    x-transition:leave-end="opacity-0 max-h-0"
                                    class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium bg-green-400 rounded-md shadow-inner"
                                    aria-label="submenu">

                                    <li class="px-2 py-1 text-white transition-colors duration-150">
                                        <div class="px-1 rounded-md hover:text-gray-800 hover:bg-green-100">
                                            <div class="flex items-center">
                                                <i class="fas fa-binoculars"></i>
                                                <a href="{{ route('posts.index') }}"
                                                    class="w-full ml-2 text-sm font-semibold text-white hover:text-gray-800">Ver</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="px-2 py-1 text-white transition-colors duration-150">
                                        <div class="px-1 rounded-md hover:text-gray-800 hover:bg-green-100">
                                            <div class="flex items-center">
                                                <i class="fas fa-plus-square"></i>
                                                <a href="{{ route('posts.create') }}"
                                                    class="w-full ml-2 text-sm font-semibold text-white hover:text-gray-800">Crear</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="px-2 py-1 text-white transition-colors duration-150">
                                        <div class="px-1 rounded-md hover:text-gray-800 hover:bg-green-100">
                                            <div class="flex items-center">
                                                <i class="fas fa-table"></i>
                                                <a href="{{ route('posts.create') }}"
                                                    class="w-full ml-2 text-sm font-semibold text-white hover:text-gray-800">Administrar</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
</div>
