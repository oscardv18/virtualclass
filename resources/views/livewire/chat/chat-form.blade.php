<div class="border-t-2 border-gray-200 px-4 pt-4 mb-2 sm:mb-0">
    <div class="relative flex">
        <input type="text" placeholder="Write Something"
            class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-full py-3"
            wire:model.defer="message">
        <div x-data="{isShow: false}">
            <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">
                <button type="button" x-on:click="isShow = true"
                    class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-white bg-blue-500 hover:bg-blue-400 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="h-6 w-6 transform rotate-90">
                        <path
                            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                        </path>
                    </svg>
                </button>
            </div>
            {{-- Notification --}}
            <div x-show="isShow" x-on:click="isShow = false"
                x-transition:enter="transition transform ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1"
                class="flex absolute top-0 right-0 m-3 w-2/3 md:w-1/3 max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="flex items-center justify-center w-12 bg-blue-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                    </svg>
                </div>

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-blue-500 dark:text-blue-400">Info</span>
                        <p class="text-sm text-gray-600 dark:text-gray-200">Mensaje</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
