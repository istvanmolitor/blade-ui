@props(['href' => '#'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'text-sm font-medium text-gray-600 no-underline hover:text-gray-900']) }}>
    {{ $slot }}
</a>
