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

                    <a href="{{ route('create-asig') }}" class="text-gray-600 dark:text-gray-200 hover:underline">
                        Asignaturas
                    </a>

                    <span class="mx-5 text-gray-500 dark:text-gray-300">
                        /
                    </span>

                    <a href="{{ route('create-asig') }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                        Crear
                    </a>
                </div>
                <section
                    class="flex flex-col max-w-4xl mb-4 mx-auto overflow-hidden bg-white rounded-xl shadow-xl dark:bg-gray-800 md:flex-row md:h-48">
                    <div class="md:flex md:items-center md:justify-center md:w-1/2 md:bg-gray-700 md:dark:bg-gray-800">
                        <div class="px-6 py-6 md:px-8 md:py-0">
                            <h2 class="text-lg font-bold text-gray-700 dark:text-white md:text-gray-100">Sign Up For
                                <span class="text-blue-600 dark:text-blue-400 md:text-blue-300">Project</span> Updates
                            </h2>

                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 md:text-gray-400">Lorem ipsum dolor
                                sit, amet consectetur adipisicing elit. Consectetur obcaecati odio</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center pb-6 md:py-0 md:w-1/2">
                        <form>
                            <div
                                class="flex flex-col p-1 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                {{-- <input
                                    class="px-6 py-2 text-gray-700 placeholder-gray-500 bg-white outline-none dark:bg-gray-800 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent"
                                    type="text" name="email" placeholder="Enter your email"
                                    aria-label="Enter your email"> --}}

                                <button
                                    class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-200 transform bg-gray-700 rounded-lg hover:bg-gray-600 focus:bg-gray-600 focus:outline-none">Crear</button>
                            </div>
                        </form>
                    </div>
                </section>
                {{-- <hr class="my-4 border-2 border-gray-300 w-3/6 relative"> --}}
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Pitchfork
                                Kickstarter Taxidermy</h1>
                            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr
                                hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
                        </div>
                        <div class="flex flex-wrap -m-4">
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-200 p-6 rounded-lg bg-white">
                                    <div
                                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-4">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-6 h-6"
                                            viewBox="0 0 24 24">
                                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist
                                        co, subway tile poke farm.</p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-200 p-6 rounded-lg bg-white">
                                    <div
                                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-4">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-6 h-6"
                                            viewBox="0 0 24 24">
                                            <circle cx="6" cy="6" r="3"></circle>
                                            <circle cx="6" cy="18" r="3"></circle>
                                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">The Catalyzer</h2>
                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist
                                        co, subway tile poke farm.</p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-200 p-6 rounded-lg bg-white">
                                    <div
                                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-4">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-6 h-6"
                                            viewBox="0 0 24 24">
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Neptune</h2>
                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist
                                        co, subway tile poke farm.</p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-200 p-6 rounded-lg bg-white">
                                    <div
                                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-4">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-6 h-6"
                                            viewBox="0 0 24 24">
                                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7">
                                            </path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Melanchole</h2>
                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist
                                        co, subway tile poke farm.</p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-200 p-6 rounded-lg bg-white">
                                    <div
                                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-4">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-6 h-6"
                                            viewBox="0 0 24 24">
                                            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Bunker</h2>
                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist
                                        co, subway tile poke farm.</p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-200 p-6 rounded-lg bg-white">
                                    <div
                                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-4">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-6 h-6"
                                            viewBox="0 0 24 24">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Ramona Falls</h2>
                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist
                                        co, subway tile poke farm.</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="flex mx-auto mt-16 text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Button</button>
                    </div>
                </section>
            </x-slot>
        </x-dashboard.main-template>
    </div>
</x-app-layout>
