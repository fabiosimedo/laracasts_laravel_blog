
<x-layout>
    @include('posts._header')


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-post-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <h2 class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-center font-bold" role="alert">No Posts yet sorry...</h2>
        @endif
    </main>

</x-layout>
