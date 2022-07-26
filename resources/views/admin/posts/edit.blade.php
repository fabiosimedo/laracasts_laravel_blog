<x-layout>
<main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
    <h1 class="text-center text-xl">Editando: <b>{{ $post->title }}</b></h1>
    <x-panel class="bg-gray-100 max-w-sm mx-auto">
        <form action="/admin/posts/{{ $post->id }}" method="post" class="p-4" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-6">
                <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Título</label>
                <input
                    class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="title"
                    id="title"
                    value="{{ $post->title }}"
                >
                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">slug</label>
                <input
                    class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="slug"
                    id="slug"
                    value="{{ $post->slug }}"
                >
                @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">thumbnail</label>
                <input
                    class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="thumbnail"
                    id="thumbnail"
                    value="{{ $post->thumbnail }}"
                >
                <img src="{{ $post->thumbnail }}" alt="Post image " style="max-width: 100%; height: auto;" class="mt-2 rounded-xl">
                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">Descrição</label>
                <textarea
                    class="border border-gray-400 p-2 w-full"
                    name="excerpt"
                    id="excerpt"
                >{{ $post->excerpt }}</textarea>
                @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Conteúdo do Post</label>
                <textarea
                    class="border border-gray-400 p-2 w-full"
                    name="body"
                    id="body"
                >{{ $post->body }}</textarea>
                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-700">Selecione uma Categoria</label>
                <select
                    class="border border-gray-400 p-2 w-full"
                    name="category_id"
                    id="category_id"
                >

                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $post->category_id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >
                            {{ $category->name }}</option>
                    @endforeach
                </select>

                @error('category_id')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <button
                type="submit"
                class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"
            >Atualizar Post</button>
        </form>
    </x-panel>
</main>
</x-layout>
