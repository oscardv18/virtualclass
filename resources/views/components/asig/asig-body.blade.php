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

                    <a href="{{ route('show-courses') }}" class="text-gray-600 dark:text-gray-200 hover:underline">
                        Asignatura
                    </a>

                    <span class="mx-5 text-gray-500 dark:text-gray-300">
                        /
                    </span>

                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">
                        View
                    </a>
                </div>
                <div class="w-full px-8 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10, 2019</span>
                        <a
                            class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500">Chat</a>
                    </div>

                    <div class="mt-2">
                        <a href="#"
                            class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">{{ $course_name }}</a>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">{{ $course_period }}
                        </p>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">Read more</a>

                        <div class="flex items-center">
                            <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block"
                                src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80"
                                alt="avatar">
                            <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200">Khatab wedaa</a>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-dashboard.main-template>
    </div>
</x-app-layout>
