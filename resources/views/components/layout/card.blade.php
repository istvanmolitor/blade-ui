@props(['title' => null])

<div {{ $attributes->merge(['class' => 'bg-white p-6 rounded shadow']) }}>
    @if($title)
        <h1 class="text-3xl font-extrabold text-center text-gray-900 mb-6">{{ $title }}</h1>
    @endif

    {{ $slot }}
</div>
