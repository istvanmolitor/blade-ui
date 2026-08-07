@props(['variant' => 'light'])

@php
    $isDark = $variant === 'dark';
@endphp

<section {{ $attributes->merge(['class' => $isDark
    ? 'bg-gradient-hero py-20 text-white'
    : 'py-20']) }}>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 md:grid-cols-3">
            {{ $slot }}
        </div>
    </div>
</section>
