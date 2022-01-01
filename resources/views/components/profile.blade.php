<div class="p-2">
    <div class="p-6 bg-indigo-50 sm:px-20 flex items-center rounded-lg justify-between m-1">
        <div class="text-2xl flex md:flex-row sm:flex-col">
            <div>
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    {{-- <button
                            class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300"> --}}
                    <img class="object-cover w-20 h-20 h-auto rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                    {{-- </button> --}}
                @else
                    <span class="inline-flex rounded-md text-white">
                        {{-- <button type="button"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none"> --}}
                        {{ Auth::user()->name }}

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        {{-- </button> --}}
                    </span>
                @endif
            </div>
            <div class="px-2">
                <span class="rounded-md">
                    {{ Auth::user()->name }}
                </span>
                <p class="text-sm">
                    {{ Auth::user()->email }}
                </p>
            </div>
        </div>

        <div class="order-last bg-white p-2 rounded-lg flex items-center" x-data="{ open: false }">
            {{-- <div x-show="open" @click.away="open = false"> --}}
                @livewire('create-posts')
            {{-- </div> --}}
        </div>
    </div>
</div>

<div class="flex p-2 gap-4">
    <div class="rounded-lg gap-4 order-1 flex flex-col">
        <div class="bg-indigo-50 p-2 rounded-lg">
            <section>
                <header>
                    <h4 class="text-gray-900 font-black text-center">CARTELERA INFORMATIVA</h4>
                </header>
                <article>
                    <p>Lorem ipsum. dolor sit amet consectetur adipisicing elit. Fugit architecto vel hic, quia ex velit ipsa? Voluptas nemo facilis, impedit voluptatum asperiores fugit illum architecto dolorem commodi recusandae? Sint, odit.</p>
                </article>
            </section>
        </div>
        <div class="bg-indigo-50 p-2 rounded-lg">
            <section>
                <header>
                    <h4 class="text-gray-900 font-black text-center">CARTELERA INFORMATIVA</h4>
                </header>
                <article>
                    <p>Lorem ipsum. dolor sit amet consectetur adipisicing elit. Fugit architecto vel hic, quia ex velit ipsa? Voluptas nemo facilis, impedit voluptatum asperiores fugit illum architecto dolorem commodi recusandae? Sint, odit.</p>
                </article>
            </section>
        </div>
    </div>
    <div class="rounded-lg w-3/4 order-last flex flex-col gap-4">
        @livewire('show-posts')
    </div>
</div>
