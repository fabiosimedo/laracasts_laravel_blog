<header class="max-w-xl mx-auto mt-2 text-center">
    <h1 class="text-2xl text-center">
       <p>Programador</p>
       <p class="text-blue-300"> AUTODIDATA </p>
    </h1>

    <h2 class="inline-flex mt-2">Por Fabio Simedo</h2>

    <div class="mt-4">
        <div class="bg-gray-100 rounded-xl">

            <x-category-dropdown />

        </div>

        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}" />
                @endif
                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{ request('search') }}">
            </form>
        </div>


    </div>
</header>
