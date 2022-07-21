<!doctype html>

<title>
    @auth
        {{ auth()->user()->username }}
    @else
        Blog do Simedo
    @endauth

</title>
<style>
    html{ scroll-behavior: smooth }
</style>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body style="font-family: Open Sans, sans-serif">
    <x-flash />

    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <h1 class="text-xs font-bold uppercase">Blog simedo</h1>
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button
                                class="text-xs font-bold uppercase"
                                {{ !auth()->user()->isadmin ? 'disabled' : '' }}
                            >Bem vindo {{ auth()->user()->name }}</button>
                        </x-slot>

                        <x-dropdown-item
                            href="/admin/posts/create"
                            :active="request()->routeIs('post-admin-create')"
                        >
                            Novo Post
                        </x-dropdown-item>
                        <x-dropdown-item
                            href="#"
                        >
                            Dashboard
                        </x-dropdown-item>
                        <x-dropdown-item
                            href="/admin/posts"
                            :active="request()->routeIs('post-admin')"
                        >
                            Editar
                        </x-dropdown-item>
                    </x-dropdown>

                    <form method="POST" action="/logout">
                        @csrf

                        <button type="submit" class="text-xs font-semibold text-blue-500 ml-6">Sair</button>
                    </form>

                @else
                    <a href="/register" class="text-xs font-bold uppercase">Registrar</a>
                    <a href="/login" class="text-xs font-bold uppercase ml-5">Entrar</a>
                @endauth

                @if (! request()->routeIs('post-admin-create') && ! request()->routeIs('post-admin'))
                    <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Se inscreva para Atualizações
                    </a>
                @endif

            </div>
        </nav>

        {{ $slot }}


        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Acompanhe os mais recentes posts.</h5>
            <p class="text-sm mt-3">Prometemos deixar não sobrecarregar sua caixa de entrada.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    @if (! request()->routeIs('post-admin-create') && ! request()->routeIs('post-admin'))
                        <form method="POST" action="/newsletter" class="lg:flex text-sm">
                            @csrf

                            <div class="lg:py-3 lg:px-5 flex items-center">
                                <label for="email" class="hidden lg:inline-block">
                                    <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                                </label>

                                <input
                                    id="email"
                                    type="text"
                                    placeholder="Envie-nos seu endereço de e-mail"
                                    name="email"
                                    class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                            </div>

                            <button type="submit"
                                    class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                            >
                                inscrever-se
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </footer>

    </section>

</body>
