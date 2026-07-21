@props(['title' => ''])

<div {{ $attributes->merge(['class' => 'max-w-2xl mx-auto bg-white p-8 rounded shadow']) }}>
    @if($title)
        <h1 class="text-2xl font-bold mb-6">{{ $title }}</h1>
    @endif

    {{ $slot }}
</div>
