@props(['title' => '', 'description' => null, 'href' => '#', 'buttonLabel' => ''])

<section {{ $attributes->merge(['class' => 'mx-auto max-w-4xl px-4 py-20 text-center sm:px-6 lg:px-8']) }}>
    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">{{ $title }}</h2>
    @if ($description)
        <p class="mt-3 text-gray-600">{{ $description }}</p>
    @endif
    <a href="{{ $href }}" class="mt-8 inline-flex items-center gap-2 rounded-full bg-indigo-600 px-6 py-3 text-sm font-semibold text-white transition-transform hover:scale-105">
        {{ $buttonLabel }}
        <x-ui::layout.icon name="arrow-right" class="h-4 w-4" />
    </a>
</section>
