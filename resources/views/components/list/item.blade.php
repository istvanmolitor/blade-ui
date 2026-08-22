@props(['icon' => null, 'description' => null])

<li {{ $attributes->merge(['class' => 'flex items-center gap-4 px-6 py-4']) }}>
    @if ($icon)
        <x-ui::layout.icon :name="$icon" class="h-5 w-5 shrink-0 text-gray-400" />
    @endif

    <div class="min-w-0 flex-1">
        @if ($slot->isNotEmpty())
            <p class="truncate font-medium text-gray-900">{{ $slot }}</p>
        @endif
        @if ($description)
            <p class="truncate text-sm text-gray-500">{{ $description }}</p>
        @endif
    </div>

    @isset($trailing)
        <div class="shrink-0 text-sm text-gray-500">{{ $trailing }}</div>
    @endisset
</li>
