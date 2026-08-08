@props(['inline' => false])

<div {{ $attributes->merge(['class' => 'mb-4' . ($inline ? ' sm:flex sm:items-start sm:gap-4' : '')]) }}>
    {{ $slot }}
</div>
