@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center p-4 border-transparent rounded-xl font-medium text-red-400 bg-white transition duration-150 ease-in-out fill-red-400'
            : 'inline-flex items-center p-4 border-transparent rounded-xl font-medium text-white hover:text-red-400 hover:fill-red-400 hover:bg-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
