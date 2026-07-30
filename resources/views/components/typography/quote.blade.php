@props(['author' => null])

<figure {{ $attributes->merge(['class' => 'border-l-4 border-gray-300 pl-4 my-6']) }}>
    <blockquote class="italic text-gray-700">
        {{ $slot }}
    </blockquote>
    @if($author)
        <figcaption class="mt-2 text-sm text-gray-500">
            — <cite>{{ $author }}</cite>
        </figcaption>
    @endif
</figure>
