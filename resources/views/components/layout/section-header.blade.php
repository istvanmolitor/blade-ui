@props(['eyebrow' => null, 'description' => null, 'align' => 'left'])

<div {{ $attributes->merge(['class' => $align === 'center' ? 'mx-auto max-w-2xl text-center' : 'max-w-2xl']) }}>
    @if ($eyebrow)
        <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">{{ $eyebrow }}</p>
    @endif
    <h2 class="mt-2 text-3xl font-bold text-gray-900 sm:text-4xl">{{ $slot }}</h2>
    @if ($description)
        <p class="mt-3 mb-6 text-gray-600">{{ $description }}</p>
    @endif
</div>
