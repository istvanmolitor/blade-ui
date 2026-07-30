@props([])

<h4 {{ $attributes->merge(['class' => 'text-lg lg:text-xl font-semibold text-gray-900 mb-3']) }}>
    {{ $slot }}
</h4>
