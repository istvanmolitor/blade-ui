@props([
    'icon' => '',
    'label' => '',
    'size' => 'md',
])

@php
    $sizes = [
        'sm' => 'p-1.5',
        'md' => 'p-2',
        'lg' => 'p-3',
    ];
    $iconSizes = [
        'sm' => 'h-4 w-4',
        'md' => 'h-5 w-5',
        'lg' => 'h-6 w-6',
    ];
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center rounded-lg text-gray-700 transition hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 '.($sizes[$size] ?? $sizes['md'])]) }}>
    <x-ui::layout.icon :name="$icon" class="{{ $iconSizes[$size] ?? $iconSizes['md'] }}" />
    @if ($label)
        <span class="sr-only">{{ $label }}</span>
    @endif
</button>
