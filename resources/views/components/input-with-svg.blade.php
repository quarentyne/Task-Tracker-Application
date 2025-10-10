<div class="relative">
    <input  {{ $attributes->merge(['class' => 'rounded-lg pl-[70px] pt-5 pb-5 pr-5 w-full font-medium font-[Montserrat] placeholder-neutral-400 leading-none focus:outline-none focus:border-red-400 focus:ring-transparent']) }} />
    <label for="{{ $id }}" class="absolute left-4 top-1/2 -translate-y-1/2">{{ $slot }}</label>
</div>

