@props(['title' => null])

<div {{ $attributes->merge(['class' => 'bg-white p-6 rounded shadow']) }}>
    @if($title)
        <h3 class="text-lg font-semibold mb-2">{{ $title }}</h3>
    @endif

    {{ $slot }}
</div>
