@props([])

<strong {{ $attributes->merge(['class' => 'font-semibold']) }}>
    {{ $slot }}
</strong>
