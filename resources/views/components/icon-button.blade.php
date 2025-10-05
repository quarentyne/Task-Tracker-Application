@props(['tag' => 'button', 'type' => 'button', 'href' => '#'])
@php
    $class = 'w-9 h-9 bg-red-400 rounded-lg flex justify-center items-center';
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
