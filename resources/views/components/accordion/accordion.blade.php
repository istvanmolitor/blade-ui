@props([])

<div {{ $attributes->merge(['class' => 'divide-y divide-gray-100 rounded-2xl border border-gray-200 bg-white']) }}>
    {{ $slot }}
</div>
