<x-layout>

    <div class="mt-5">
        <div class="flex bg-gray-200 justify-between w-1/3 rounded-sm px-1">
            <div>Total de usuários</div>
            <div>{{ $user::all('id')->count() }}</div>
        </div>
        @foreach ($user::all() as $users)
            <div class="w-full bg-white shadow-lg lg:w-3/4 mt-2">
                <ul class="divide-y-2 divide-gray-400">
                    <li class="flex justify-between p-3 hover:bg-blue-200 flex-wrap">
                        <div class="bg-gray-100">{{ $users->id }}</div>
                        <div>{{ $users->username }}</div>
                        <div>{{ $users->name }}</div>
                        <div>{{ $users->email }}</div>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</x-layout>
