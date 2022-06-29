@props(['active' => false ])

@php
    $classes = 'block text-left py-2 pl-3 pr-9 text-sm leading-6 hover:bg-gray-300 focus:bg-gray-300 w-full';

    if($active) $classes .= ' bg-blue-400 text-white';
@endphp

<a {{ $attributes(['class' => $classes ]) }}>
    {{ $slot }}
</a>
