@props(['value', 'inline' => false])

<label {{ $attributes->merge(['class' => 'block text-gray-700 text-sm font-bold ' . ($inline ? 'sm:w-40 sm:shrink-0 sm:pt-2' : 'mb-2')]) }}>
    {{ $value ?? $slot }}
</label>
