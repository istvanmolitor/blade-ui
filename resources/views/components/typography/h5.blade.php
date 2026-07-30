@props([])

<h5 {{ $attributes->merge(['class' => 'text-base lg:text-lg font-semibold text-gray-900 mb-2']) }}>
    {{ $slot }}
</h5>
