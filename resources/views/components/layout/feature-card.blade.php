@props([
    'icon' => null,
    'description' => null,
    'href' => null,
    'linkLabel' => 'Bővebben',
    'variant' => 'light',
])

@php
    $isDark = $variant === 'dark';
@endphp

<div {{ $attributes->merge(['class' => $isDark
    ? 'rounded-2xl border border-white/15 bg-white/10 p-6 backdrop-blur'
    : 'group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-8 transition-all hover:-translate-y-1 hover:shadow-lg']) }}>
    @if ($icon)
        @if ($isDark)
            <x-ui::layout.icon :name="$icon" class="h-8 w-8" />
        @else
            <div class="grid h-12 w-12 place-items-center rounded-xl bg-indigo-600 text-white">
                <x-ui::layout.icon :name="$icon" class="h-6 w-6" />
            </div>
        @endif
    @endif

    <h3 class="{{ $isDark ? 'mt-4 text-xl font-semibold text-white' : 'mt-5 text-xl font-semibold text-gray-900' }}">{{ $slot }}</h3>

    @if ($description)
        <p class="{{ $isDark ? 'mt-1 text-sm text-white/80' : 'mt-2 text-sm text-gray-600' }}">{{ $description }}</p>
    @endif

    @if ($href)
        <a href="{{ $href }}" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-indigo-600 transition-all hover:gap-2">
            {{ $linkLabel }}
            <x-ui::layout.icon name="arrow-right" class="h-4 w-4" />
        </a>
    @endif
</div>
