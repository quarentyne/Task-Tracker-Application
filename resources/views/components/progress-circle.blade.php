@props(['progress' => 0, 'color' => 'transparent'])

<div>
    <div {{ $attributes->merge([
        'class' => 'rounded-full h-[120px] w-[120px] relative flex items-center justify-center',
    ]) }}>
        <div class="absolute inset-0 rounded-full border-[12px] border-neutral-300"></div>
        <div class="absolute inset-0 rounded-full"
             style="
                background: conic-gradient(
                    {{ $color }} {{ $progress }}%,
                    #d4d4d4 {{ $progress }}%
                );
                mask: radial-gradient(farthest-side, transparent calc(100% - 12px), black 0);
                -webkit-mask: radial-gradient(farthest-side, transparent calc(100% - 12px), black 0);
             ">
        </div>
        <div class="relative z-10 font-semibold">
            {{ $value }}
        </div>
    </div>
    <div class="relative pl-4 mt-1">
        <i class="absolute w-2 h-2 rounded-full left-0 -translate-y-1/2 top-1/2"
           style="background: {{ $color }}"></i>
        {{ $label }}
    </div>
</div>
