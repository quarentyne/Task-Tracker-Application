@props(['tag' => 'button', 'type' => 'button', 'href' => '#'])

@php
    $class = 'inline-flex items-center px-4 py-2 bg-orange-600 border border-transparent rounded-md font-medium font-[Montserrat] text-white tracking-widest hover:bg-red-400 focus:bg-gray-400 active:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition ease-in-out duration-150 disabled:bg-red-400';
@endphp

@if($tag === 'button')
    <button
        type="{{ $type }}"
        {{ $attributes->merge(['class' => $class]) }}
    >{{ $slot }}</button>
@else
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => $class]) }}
    >{{ $slot }}</a>
@endif
