<article
    {{ $attributes->merge([ 'class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>

    <div class="py-6 px-5">
        <div>
            <img src="{{ $post->thumbnail }}" alt="Blog Post illustration" class="rounded">
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        {{ $post->title }}
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4 space-y-2">
                    {!! $post->excerpt !!}
            </div>

            <footer class="flex flex-wrap justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/blog-profile.jpg" alt="Profile image" class="object-scale-down h-12 w-24 rounded-xl mb-4">
                    <div class="ml-3 mt-4">
                        <h5 class="font-bold">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>

                <div>
                    <a href="/post/{{ $post->slug }}"
                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8 mt-4"
                    >
                        Leia o Post Completo
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
