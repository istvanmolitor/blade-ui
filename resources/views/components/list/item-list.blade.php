@props([])

<ul {{ $attributes->merge(['class' => 'divide-y divide-gray-100 overflow-hidden rounded-2xl border border-gray-200 bg-white']) }}>
    {{ $slot }}
</ul>
