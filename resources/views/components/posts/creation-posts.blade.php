<x-app-layout>
    <div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">
        <x-dashboard.aside-dash />
        <x-dashboard.main-template>
            <x-slot name="content">
                <section class="text-gray-600 body-font">
                    <div class="container px-2 pt-24 mx-auto">
                        <div class="flex flex-col items-start mx-auto lg:w-2/3 sm:flex-row sm:items-center">
                            <h1 class="flex-grow text-2xl font-medium text-gray-900 sm:pr-16 title-font">Puedes Realizar
                                cualquier publicación, estas son de dos categorias, Informativa y Evaluativa. Casa una
                                será notificada a las respectivas personas</h1>
                                @livewire('create-posts')
                        </div>
                    </div>
                </section>
                <section class="overflow-hidden text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        @livewire('show-posts')
                    </div>
                </section>
            </x-slot>
        </x-dashboard.main-template>
    </div>
</x-app-layout>
