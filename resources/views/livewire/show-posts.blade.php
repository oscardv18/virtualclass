
<div>
    <div class="flex flex-wrap -m-12">
        @foreach ($posts as $post)
        <div class="flex flex-col items-start p-12 md:w-1/2">
            <span class="inline-block px-2 py-1 text-xs font-medium tracking-widest text-yellow-500 rounded bg-yellow-50">
                @if ($post->post_type_id == 1)
                {{ __('INFORMACIÓN') }}
                @elseif ($post->post_type_id)
                {{ __('EVALUACIÓN') }}
                @endif
            </span>
            <h2 class="mt-4 mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">
                {{ $post->title }}
            </h2>
            <p class="mb-8 leading-relaxed">
                {{ $post->content }}
            </p>
            <div class="flex flex-wrap items-center w-full pb-4 mt-auto mb-4 border-b-2 border-gray-300">
                <a class="inline-flex items-center text-yellow-500">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <span
                    class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-400 border-r-2 border-gray-200">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>1.2K
                </span>
                <span class="inline-flex items-center text-sm leading-none text-gray-400">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" viewBox="0 0 24 24">
                        <path
                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                        </path>
                    </svg>6
                </span>
            </div>
            <a class="inline-flex items-center">
                <img alt="blog" src="https://dummyimage.com/104x104"
                    class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full">
                <span class="flex flex-col flex-grow pl-4">
                    <span class="font-medium text-gray-900 title-font">Holden Caulfield</span>
                    <span class="text-gray-400 text-xs tracking-widest mt-0.5">UI DEVELOPER</span>
                </span>
            </a>
        </div>
        @endforeach
    </div>
    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div>
