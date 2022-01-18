<x-app-layout>
    <div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">
        <x-dashboard.aside-dash />
        <x-dashboard.main-template>
            <x-slot name="content">
                <div class="flex-1 p:2 sm:p-6 justify-between flex flex-col h-screen">
                    {{-- CABECERA DEL CHAT --}}
                    <div class="flex sm:items-center justify-between py-3 border-b-2 border-gray-200">
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                alt="" class="w-10 sm:w-16 h-10 sm:h-16 rounded-full">
                            <div class="flex flex-col leading-tight">
                                <div class="text-2xl mt-1 flex items-center">
                                    <span class="text-gray-700 mr-3">{{ $course_name }}</span>
                                    <span class="text-green-500">
                                        <svg width="10" height="10">
                                            <circle cx="5" cy="5" r="5" fill="currentColor"></circle>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-lg text-gray-600">{{ $course_period }}</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button type="button"
                                class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    {{-- CONTENEDOR DONDE SE MUESTRAN LOS MENSAJES O LISTA DE MENSAJES --}}
                    <div id="messages"
                        class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
                        <div class="chat-message">
                            <div class="flex items-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                    <div><span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">Can
                                            be verified on any platform using docker</span></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-1">
                            </div>
                        </div>
                        <div class="chat-message">
                            <div class="flex items-end justify-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                                    <div><span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-600 text-white ">Your
                                            error message says permission denied, npm global installs must be given root
                                            privileges.</span></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1590031905470-a1a1feacbb0b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-2">
                            </div>
                        </div>
                        <div class="chat-message">
                            <div class="flex items-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                    <div><span class="px-4 py-2 rounded-lg inline-block bg-gray-300 text-gray-600">Command was run with
                                            root privileges. I'm sure about that.</span></div>
                                    <div><span class="px-4 py-2 rounded-lg inline-block bg-gray-300 text-gray-600">I've update the
                                            description so it's more obviously now</span></div>
                                    <div><span class="px-4 py-2 rounded-lg inline-block bg-gray-300 text-gray-600">FYI
                                            https://askubuntu.com/a/700266/510172</span></div>
                                    <div>
                                        <span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">
                                            Check the line above (it ends with a # so, I'm running it as root )
                                            <pre># npm install -g @vue/devtools</pre>
                                        </span>
                                    </div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-1">
                            </div>
                        </div>
                        <div class="chat-message">
                            <div class="flex items-end justify-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                                    <div><span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-600 text-white ">Any
                                            updates on this issue? I'm getting the same error when trying to install devtools.
                                            Thanks</span></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1590031905470-a1a1feacbb0b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-2">
                            </div>
                        </div>
                        <div class="chat-message">
                            <div class="flex items-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                    <div><span
                                            class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">Thanks
                                            for your message David. I thought I'm alone with this issue. Please, 👍 the issue to support
                                            it :)</span></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-1">
                            </div>
                        </div>
                        <div class="chat-message">
                            <div class="flex items-end justify-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                                    <div><span class="px-4 py-2 rounded-lg inline-block bg-blue-600 text-white ">Are you using
                                            sudo?</span></div>
                                    <div><span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-600 text-white ">Run
                                            this command sudo chown -R `whoami` /Users//.npm-global/ then install
                                            the package globally without using sudo</span></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1590031905470-a1a1feacbb0b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-2">
                            </div>
                        </div>
                        <div class="chat-message">
                            <div class="flex items-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                    <div><span class="px-4 py-2 rounded-lg inline-block bg-gray-300 text-gray-600">It seems like you are
                                            from Mac OS world. There is no /Users/ folder on linux 😄</span></div>
                                    <div><span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">I
                                            have no issue with any other packages installed with root permission globally.</span></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-1">
                            </div>
                        </div>
                        <div class="chat-message">
                            <div class="flex items-end justify-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                                    <div><span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-600 text-white ">yes, I
                                            have a mac. I never had issues with root permission as well, but this helped me to solve the
                                            problem</span></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1590031905470-a1a1feacbb0b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-2">
                            </div>
                        </div>
                        <div class="chat-message">
                            <div class="flex items-end">
                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                    <div><span class="px-4 py-2 rounded-lg inline-block bg-gray-300 text-gray-600">I get the same error
                                            on Arch Linux (also with sudo)</span></div>
                                    <div><span class="px-4 py-2 rounded-lg inline-block bg-gray-300 text-gray-600">I also have this
                                            issue, Here is what I was doing until now: #1076</span></div>
                                    <div><span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">even
                                            i am facing</span></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144"
                                    alt="My profile" class="w-6 h-6 rounded-full order-1">
                            </div>
                        </div>
                    </div>
                    {{-- Formulario de Envio de los mensajes, input y boton --}}
                    @livewire('chat.chat-form')
                </div>
            </x-slot>
        </x-dashboard.main-template>
    </div>
</x-app-layout>
