@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="py-2 pl-3 pr-9 text-sm font-semibold">
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    <div
        x-show="show"
        class="py-3 absolute mt-2 z-50 bg-gray-100 rounded-xl overflow-auto max-h-50"
        style="display: none">

        {{ $slot }}
    </div>
</div>
