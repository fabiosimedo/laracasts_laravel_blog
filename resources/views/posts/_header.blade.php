<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        As <span class="text-blue-500">Últimas Atualizações </span> do Mundo Tech
    </h1>

    <h2 class="inline-flex mt-2">Por Fabio Simedo <img src="/images/lary-head.svg"
                                                       alt="Head of Lary the mascot"></h2>


    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">

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
