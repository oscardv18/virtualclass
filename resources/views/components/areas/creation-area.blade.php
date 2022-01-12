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

                    <a href="{{ route('show-area') }}" class="text-gray-600 dark:text-gray-200 hover:underline">
                        Carreras
                    </a>

                    <span class="mx-5 text-gray-500 dark:text-gray-300">
                        /
                    </span>

                    <a href="{{ route('create-area') }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                        Crear
                    </a>
                </div>
                <section
                    class="flex flex-col max-w-4xl mb-4 mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 md:flex-row md:h-48">
                    <div class="md:flex md:items-center md:justify-center md:w-1/2 md:bg-gray-700 md:dark:bg-gray-800">
                        <div class="px-6 py-6 md:px-8 md:py-0">
                            <h2 class="text-lg font-bold text-gray-700 dark:text-white md:text-gray-100">Aqui Puedes
                                <span class="text-blue-600 dark:text-blue-400 md:text-blue-300">Crear</span> Areas
                            </h2>

                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 md:text-gray-400">Areas como las carreras que ofrezacas, los grados, años, niveles, entre otros</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center pb-6 md:py-0 md:w-1/2">
                        {{-- <form> --}}
                            <div
                                class="flex flex-col p-1 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                {{-- <input
                                    class="px-6 py-2 text-gray-700 placeholder-gray-500 bg-white outline-none dark:bg-gray-800 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent"
                                    type="text" name="email" placeholder="Enter your email"
                                    aria-label="Enter your email"> --}}

                                @livewire('areas.create-area')
                            </div>
                        {{-- </form> --}}
                    </div>
                </section>
                <hr class="my-4 border-2 border-gray-300">
                {{-- <div class="max-w-2xl px-8 py-4 mt-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10, 2019</span>
                        <a
                            class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500">Design</a>
                    </div>

                    <div class="mt-2">
                        <a href="#"
                            class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">Accessibility
                            tools for designers and developers</a>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto
                            eos enim reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!
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
                </div> --}}
                @livewire('areas.show-area')
            </x-slot>
        </x-dashboard.main-template>
    </div>
</x-app-layout>
