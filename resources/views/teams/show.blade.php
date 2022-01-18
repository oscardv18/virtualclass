<x-app-layout>
    <div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">
        <x-dashboard.aside-dash />
        <x-dashboard.main-template>
            <x-slot name="content">
                <div>
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        @livewire('teams.update-team-name-form', ['team' => $team])

                        @livewire('teams.team-member-manager', ['team' => $team])

                        @if (Gate::check('delete', $team) && ! $team->personal_team)
                        <x-jet-section-border />

                        <div class="mt-10 sm:mt-0">
                            @livewire('teams.delete-team-form', ['team' => $team])
                        </div>
                        @endif
                    </div>
                </div>
            </x-slot>
        </x-dashboard.main-template>
    </div>

</x-app-layout>
