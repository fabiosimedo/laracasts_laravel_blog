<x-layout>
    <div class="container">
        <div class="mb-5 mt-5">
            <h1 class="font-bold mt-3 mb-3">Edição de Posts</h1>
        </div>
        @foreach ($posts as $post)
        <div class="w-full bg-white rounded-lg shadow-lg lg:w-3/4 mt-2">
                <ul class="divide-y-2 divide-gray-400">
                    <li class="flex justify-between p-3 hover:bg-blue-200">
                        <a href="/admin/posts/{{ $post->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>

                        <a href="/post/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                        {{--   --}}
                        <form method="POST" action="/admin/posts/{{ $post->id }}" id="delForm">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 font-bold">X</button>
                        </form>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
    <script>
        const delForm = document.querySelectorAll('#delForm')
        delForm.forEach(e => {
            e.addEventListener('submit', f => {
                confirm("Você realmente quer deletar esse post?") ? console.log(f) : f.preventDefault()
            })
        })
    </script>
</x-layout>
