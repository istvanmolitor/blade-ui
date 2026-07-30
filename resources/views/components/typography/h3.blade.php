@props([])

<h3 {{ $attributes->merge(['class' => 'text-xl lg:text-2xl font-semibold text-gray-900 mb-4']) }}>
    {{ $slot }}
</h3>
