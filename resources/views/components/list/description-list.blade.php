@props([])

<dl {{ $attributes->merge(['class' => 'divide-y divide-gray-100']) }}>
    {{ $slot }}
</dl>
