@props([])

<ul {{ $attributes->merge(['class' => 'mt-6 space-y-4']) }}>
    {{ $slot }}
</ul>
