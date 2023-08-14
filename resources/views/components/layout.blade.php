<!doctype html>

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2JDEZED7FH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-2JDEZED7FH');
    </script>

    <title>
        @auth
            {{ auth()->user()->username }}
        @else
            Blog do Simedo
        @endauth
    </title>

    <style>
        html{
            scroll-behavior: smooth;
            font-size: 2.4vh;
        }
        @media only screen and (min-width: 600px) {
            div#logo{
                font-size: .4rem
            }
        }
    </style>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body style="font-family: Open Sans, sans-serif">
    <x-flash />

    <section>
        <nav class="flex justify-between">
            @guest
                <div class="w-2/5 py-2 px-2 text-xs font-bold uppercase text-center">
            @endguest

            @auth
                <div class="py-4 px-2 uppercase text-center" id="logo">
            @endauth

                    <a href="/">
                        <h1>
                            <p>Blog</p>
                            <p>do Simedo</p>
                        </h1>
                    </a>
                </div>

            <div>
                @auth
                <div class="flex">
                    <x-dropdown>
                        <x-slot name="trigger" class="flex">
                            <button
                                class="bg-transparent text-blue-400
                                    font-semibold border
                                    hover:border-transparent rounded
                                    text-end py-3 px-3"
                                {{ !auth()->user()->isadmin ? 'disabled' : '' }}
                            ><strong class="text-blue-700">{{ auth()->user()->name }}</strong></button>
                        </x-slot>

                        <x-dropdown-item
                            href="/admin/posts/create"
                            :active="request()->routeIs('post-admin-create')"
                        >
                            Novo Post
                        </x-dropdown-item>
                        <x-dropdown-item
                            href="/admin/dashboard"
                            :active="request()->routeIs('post-admin-dashboard')"
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

                        <button type="submit"
                                class="bg-white hover:bg-gray-100 text-gray-800
                                    font-semibold py-2 px-4 border
                                    border-gray-400 rounded shadow
                                    mt-2 mr-2">Sair</button>
                    </form>
                </div>



                @else
                    <div class="flex justify-end py-2 px-2">

                            <a href="/register" class="text-xs font-bold uppercase">
                                <button
                                    class="bg-transparent hover:bg-blue-500 text-blue-700
                                        font-semibold hover:text-white py-2 px-4
                                        border border-blue-500
                                        hover:border-transparent rounded"> Registrar
                                </button>
                            </a>

                        <a href="/login" class="text-xs font-bold uppercase ml-2">
                            <button
                                class="bg-transparent hover:bg-blue-500 text-blue-700
                                    font-semibold hover:text-white py-2 px-6
                                    border border-blue-500
                                    hover:border-transparent rounded"> entrar
                            </button>
                        </a>
                    </div>
                @endauth
            </div>

        </nav>

        {{-- <div class="flex justify-center mt-3">
            @if (! request()->routeIs('post-admin-create') && ! request()->routeIs('post-admin'))
                <a href="#newsletter" class="bg-blue-500 rounded-full text-xs font-semibold text-white uppercase py-2 px-1 text-center">
                    Se inscreva para Atualizações
                </a>
            @endif
        </div> --}}

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
