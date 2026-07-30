@props([])

<h1 {{ $attributes->merge(['class' => 'text-3xl lg:text-4xl font-bold text-gray-900 mb-8']) }}>
    {{ $slot }}
</h1>
