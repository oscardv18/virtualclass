@foreach ($posts as $post)
    <div class="bg-indigo-50 p-2 rounded-lg">
        <section>
            <header>
                <h4 class="text-gray-900 font-black text-center">{{ $post->title }}</h4>
                <span>{{ $post->description }}</span>
            </header>
            <article>
                <p>{{ $post->content }}</p>
            </article>
        </section>
    </div>
@endforeach
