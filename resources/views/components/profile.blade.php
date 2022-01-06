<div class="p-2">
    <div class="flex items-center justify-between p-6 m-1 rounded-2xl bluewhite sm:px-20">
        <div class="flex text-2xl md:flex-row sm:flex-col">
            <div>
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img class="object-cover w-20 h-20 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                @else
                <span class="inline-flex text-white rounded-md">
                        {{ Auth::user()->name }}

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                </span>
                @endif
            </div>
            <div class="flex flex-col justify-center px-2">
                <span class="rounded-md">
                    {{ Auth::user()->name }}
                </span>
                <p class="text-sm">
                    {{ Auth::user()->email }}
                </p>
            </div>
        </div>

        <div class="flex flex-col items-center order-last px-1 rounded-lg" x-data="{ open: false }">
            <div class="flex flex-col justify-center">
                @livewire('create-posts', ['user_id' => Auth::user()->id])
                <a href="{{ route('edit') }}" style="color: rgb(192, 167, 53)">
                    <i class="fas fa-edit fa-1x"> Administrar</i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="flex gap-4 p-2">
    <div class="flex flex-col w-2/5  order-1 gap-4 rounded-lg">
        <div class="p-2 rounded-2xl bluewhite">
            <section>
                <header>
                    <h4 class="font-black text-center text-gray-900">CARTELERA INFORMATIVA</h4>
                </header>
                <article>
                    <p>Lorem ipsum. dolor sit amet consectetur adipisicing elit. Fugit architecto vel hic, quia ex velit
                        ipsa? Voluptas nemo facilis, impedit voluptatum asperiores fugit illum architecto dolorem
                        commodi recusandae? Sint, odit.</p>
                </article>
            </section>
        </div>
        <div class="p-2 rounded-2xl bluewhite">
            <section>
                <header>
                    <h4 class="font-black text-center text-gray-900">CARTELERA INFORMATIVA</h4>
                </header>
                <article>
                    <p>Lorem ipsum. dolor sit amet consectetur adipisicing elit. Fugit architecto vel hic, quia ex velit
                        ipsa? Voluptas nemo facilis, impedit voluptatum asperiores fugit illum architecto dolorem
                        commodi recusandae? Sint, odit.</p>
                </article>
            </section>
        </div>
    </div>
    <div class="flex flex-col w-3/5 order-last gap-4 rounded-lg">
        @livewire('show-posts')
    </div>
</div>
