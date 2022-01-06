<div class="flex flex-col gap-4">
    @foreach ($posts as $post)
    <div class="bluewhite p-2 rounded-2xl">
        <section class="flex flex-col">
            <header>
                <div>
                    <div class="flex flex-row items-center justify-between gap-4">
                        <h4 class="text-gray-900 font-black text-center">{{ $post->title }}</h4>
                        @livewire('delete-posts', ['post_id' => $post->id, 'postTitle' => $post->title],
                                    key($post->id))
                        {{-- @livewire('update-posts', ['post_id' => $post->id], key($post->id)) --}}
                    </div>
                    <span>{{ $post->description }}</span>
                </div>
            </header>
            <article class="overflow-auto">
                {{ $post->content }}
            </article>
        </section>
    </div>
    @endforeach
</div>
