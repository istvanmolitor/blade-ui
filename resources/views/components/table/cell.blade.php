@props(['align' => 'left'])

@php
    $alignClass = match ($align) {
        'right' => 'text-right',
        'center' => 'text-center',
        default => 'text-left',
    };
@endphp

<td {{ $attributes->merge(['class' => "px-6 py-4 {$alignClass} text-sm text-gray-700"]) }}>
    {{ $slot }}
</td>
