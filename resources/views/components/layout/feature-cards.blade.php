@props(['variant' => 'light'])

@php
    $isDark = $variant === 'dark';
@endphp

<section {{ $attributes->merge(['class' => $isDark
    ? 'bg-gradient-hero text-white'
    : '']) }}>
    <div class="grid gap-8 md:grid-cols-3">
        {{ $slot }}
    </div>
</section>
