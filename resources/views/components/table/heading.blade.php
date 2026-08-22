@props(['align' => 'left'])

@php
    $alignClass = match ($align) {
        'right' => 'text-right',
        'center' => 'text-center',
        default => 'text-left',
    };
@endphp

<th scope="col" {{ $attributes->merge(['class' => "px-6 py-3 {$alignClass} text-xs font-semibold uppercase tracking-wider text-gray-500"]) }}>
    {{ $slot }}
</th>
