@props(['text' => config('app.name', 'Laravel'), 'href' => '/', 'icon' => null])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex items-center gap-2 text-lg font-bold text-gray-800 no-underline hover:text-gray-900']) }}>
    @if ($icon)
        <span class="grid h-9 w-9 place-items-center rounded-xl bg-indigo-600 text-white">
            <x-ui::layout.icon :name="$icon" class="h-5 w-5" />
        </span>
    @endif
    <span>{{ $text }}</span>
</a>
