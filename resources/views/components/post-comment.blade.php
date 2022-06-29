@props(['comment'])

<x-panel>
<article class="flex bg-gray-100 space-x-4 m-2">
    <div><img class="rounded-xl m-3" src="https://i.pravatar.cc/100?u={{ $comment->user_id }}" width="60" height="60"/></div>

    <div>
        <header class="m-3">
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">Posted
                <time>{{ $comment->created_at->format('Y, F j, g:i a') }}</time></p>
        </header>
        <p class="mt-5">
            {{ $comment->body }}
        </p>
    </div>
</article>
</x-panel>
