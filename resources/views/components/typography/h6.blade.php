@props([])

<h6 {{ $attributes->merge(['class' => 'text-sm lg:text-base font-semibold text-gray-900 mb-2']) }}>
    {{ $slot }}
</h6>
