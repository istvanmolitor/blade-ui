@props(['href' => '#', 'active' => false])

<a href="{{ $href }}" {{ $attributes->merge(['class' => $active ? 'text-sm font-medium text-indigo-600 no-underline' : 'text-sm font-medium text-gray-600 no-underline hover:text-gray-900']) }}>
    {{ $slot }}
</a>
