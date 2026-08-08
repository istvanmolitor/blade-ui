@props([
    'icon' => 'check-circle',
])

<div {{ $attributes->merge(['class' => 'flex items-start gap-3 rounded-lg border border-green-400 bg-green-100 px-4 py-3 text-sm text-green-700 mb-4']) }}>
    @if ($icon)
        <x-ui::layout.icon :name="$icon" class="mt-0.5 h-5 w-5 shrink-0" />
    @endif
    <div>{{ $slot }}</div>
</div>
