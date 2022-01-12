<x-app-layout>
    <div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">
        <x-dashboard.aside-dash />
        <x-dashboard.main-template>
            <x-slot name="content">
                <section class="overflow-hidden text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        @livewire('show-posts')
                    </div>
                </section>
            </x-slot>
        </x-dashboard.main-template>
    </div>
</x-app-layout>
