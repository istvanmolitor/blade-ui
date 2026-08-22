@props([
    'name' => null,
    'icon' => 'user',
    'size' => 'md',
])

@php
    $sizes = [
        'sm' => 'h-8 w-8 text-xs',
        'md' => 'h-12 w-12 text-sm',
        'lg' => 'h-16 w-16 text-lg',
    ];
    $iconSizes = [
        'sm' => 'h-4 w-4',
        'md' => 'h-6 w-6',
        'lg' => 'h-8 w-8',
    ];
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex shrink-0 items-center justify-center rounded-full bg-indigo-100 font-semibold text-indigo-700 '.($sizes[$size] ?? $sizes['md'])]) }}>
    @if ($initials())
        {{ $initials() }}
    @else
        <x-ui::layout.icon :name="$icon" class="{{ $iconSizes[$size] ?? $iconSizes['md'] }}" />
    @endif
</span>
