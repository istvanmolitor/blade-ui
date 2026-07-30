@props([])

<h2 {{ $attributes->merge(['class' => 'text-2xl lg:text-3xl font-bold text-gray-900 mb-6']) }}>
    {{ $slot }}
</h2>
