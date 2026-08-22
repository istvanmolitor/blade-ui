@props([
    'variant' => 'gray',
    'icon' => null,
])

@php
    $variants = [
        'gray' => 'bg-gray-100 text-gray-700',
        'indigo' => 'bg-indigo-100 text-indigo-700',
        'green' => 'bg-green-100 text-green-700',
        'yellow' => 'bg-yellow-100 text-yellow-700',
        'red' => 'bg-red-100 text-red-700',
    ];
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-1 rounded-full px-2.5 py-0.5 text-xs font-medium '.($variants[$variant] ?? $variants['gray'])]) }}>
    @if ($icon)
        <x-ui::layout.icon :name="$icon" class="h-3 w-3 shrink-0" />
    @endif
    {{ $slot }}
</span>
