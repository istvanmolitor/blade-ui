@props([])

<div {{ $attributes->merge(['class' => 'flex items-center justify-end gap-3 border-t border-gray-200 bg-gray-50 px-6 py-4']) }}>
    {{ $slot }}
</div>
