@props([
    'icon' => null,
    'size' => 'md',
    'href' => null,
])

@php
    $sizes = [
        'sm' => 'px-3 py-1.5 text-xs',
        'md' => 'px-4 py-2.5 text-sm',
        'lg' => 'px-6 py-3 text-base',
    ];
    $iconSizes = [
        'sm' => 'h-3.5 w-3.5',
        'md' => 'h-4 w-4',
        'lg' => 'h-5 w-5',
    ];
    $tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }} {{ $attributes->merge(array_filter([
    'href' => $href,
    'type' => $href ? null : 'button',
    'class' => 'inline-flex items-center justify-center gap-2 rounded-lg bg-red-600 font-semibold text-white transition hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 '.($sizes[$size] ?? $sizes['md']),
])) }}>
    @if ($icon)
        <x-ui::layout.icon :name="$icon" class="{{ $iconSizes[$size] ?? $iconSizes['md'] }}" />
    @endif
    {{ $slot }}
</{{ $tag }}>
