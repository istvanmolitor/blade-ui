@props([
    'icon' => 'x-circle',
])

<div {{ $attributes->merge(['class' => 'flex items-start gap-3 rounded-lg border border-red-400 bg-red-100 px-4 py-3 text-sm text-red-700 mb-4']) }}>
    @if ($icon)
        <x-ui::layout.icon :name="$icon" class="mt-0.5 h-5 w-5 shrink-0" />
    @endif
    <div>{{ $slot }}</div>
</div>
