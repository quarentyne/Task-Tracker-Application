<label class="flex items-center relative">
    {{ $slot }}
    <input type="checkbox" {{ $attributes->merge(['class' => 'focus:ring-transparent']) }} />
</label>
