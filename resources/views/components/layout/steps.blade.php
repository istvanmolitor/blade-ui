@props([])

<ol {{ $attributes->merge(['class' => 'space-y-6']) }}>
    {{ $slot }}
</ol>
