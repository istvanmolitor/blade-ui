@props([
    'title' => '',
    'open' => false,
])

<details {{ $attributes->merge(['class' => 'group']) }} @if ($open) open @endif>
    <summary class="flex cursor-pointer list-none items-center justify-between gap-2 px-4 py-4 font-medium text-gray-900 [&::-webkit-details-marker]:hidden marker:hidden">
        {{ $title }}
        <x-ui::layout.icon name="chevron-down" class="h-4 w-4 shrink-0 text-gray-400 transition-transform group-open:rotate-180" />
    </summary>

    <div class="px-4 pb-4 text-sm text-gray-600">
        {{ $slot }}
    </div>
</details>
