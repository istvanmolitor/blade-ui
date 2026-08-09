@props(['title' => null, 'description' => null])

<div {{ $attributes->merge(['class' => 'border-b border-gray-200 px-6 py-4']) }}>
    @if ($title)
        <h3 class="text-lg font-semibold text-gray-900">{{ $title }}</h3>
    @endif

    @if ($description)
        <p class="mt-1 text-sm text-gray-500">{{ $description }}</p>
    @endif

    {{ $slot }}
</div>
