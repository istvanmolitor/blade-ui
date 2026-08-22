@props([])

<tfoot {{ $attributes->merge(['class' => 'bg-gray-50']) }}>
    {{ $slot }}
</tfoot>
