@props(['text' => config('app.name', 'Laravel'), 'href' => '/'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'text-lg font-bold text-gray-800 no-underline hover:text-gray-900']) }}>
    {{ $text }}
</a>
