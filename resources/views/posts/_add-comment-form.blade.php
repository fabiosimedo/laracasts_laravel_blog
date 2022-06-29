
<section class="col-span-8 col-start-5 mt-10 space-y-5">
    @auth
        <X-panel>
            <form action="/post/{{ $post->slug }}/comments" method="POST">
                @csrf

                <header class="flex p-6 rounded-xl">
                    <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="User thumbnail" class="rounded-xl">
                    <h2 class="ml-6">Leave a Comment</h2>
                </header>

                <div>
                    <textarea name="body" id="comment" rows="3" class="border border-gray-300 space-x-4 rounded-xl w-full" placeholder="What are you thinking now?"></textarea>

                    @error('body')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-3" role="alert">
                            <span class="block sm:inline">{{ $message }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            </span>
                        </div>
                    @enderror

                </div>

                <div class="flex justify-end">
                    <button
                        type="submit"
                        class="bg-blue-500 text-white uppercase font-semibold text-xs px-10 py-2 rounded-xl hover:bg-blue-600 mb-3">Enviar</button>
                </div>
            </form>
        </X-panel>
    @else
        <a href="/login" class="hover:underline">Click here to Register or Login to leave a comment...</a>
    @endauth

    @foreach ($post->comments as $comment)
        <x-post-comment :comment="$comment" />
    @endforeach

</section>
