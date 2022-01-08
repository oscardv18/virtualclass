<div class="flex flex-col gap-4">
    @foreach ($posts as $post)
    <div class="p-2 bluewhite rounded-2xl">
        <section class="flex flex-col">
            <header>
                <div>
                    <div class="flex flex-row items-center justify-between gap-4">
                        <h4 class="font-black text-center text-gray-900">{{ $post->title }}</h4>
                        <span>
                            Tipo:
                            @if ($post->post_type_id == 1)
                                {{ __('Información') }}
                            @elseif ($post->post_type_id)
                            {{ __('Evaluación') }}
                            @endif
                        </span>
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
