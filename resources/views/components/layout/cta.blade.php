@props(['title' => '', 'description' => null, 'href' => '#', 'buttonLabel' => ''])

<section {{ $attributes->merge(['class' => 'mx-auto max-w-4xl px-4 py-20 text-center sm:px-6 lg:px-8']) }}>
    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">{{ $title }}</h2>
    @if ($description)
        <p class="mt-3 text-gray-600">{{ $description }}</p>
    @endif
    <x-ui::buttons.primary-button :href="$href" size="lg" class="mt-8">
        {{ $buttonLabel }}
        <x-ui::layout.icon name="arrow-right" class="h-4 w-4" />
    </x-ui::buttons.primary-button>
</section>
