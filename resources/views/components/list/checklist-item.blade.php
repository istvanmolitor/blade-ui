@props(['description' => null, 'icon' => 'check-circle-2'])

<li {{ $attributes->merge(['class' => 'flex gap-3']) }}>
    <x-ui::layout.icon :name="$icon" class="mt-0.5 h-5 w-5 shrink-0 text-indigo-600" />
    <div>
        @if ($slot->isNotEmpty())
            <p class="font-semibold text-gray-900">{{ $slot }}</p>
        @endif
        @if ($description)
            <p class="text-sm text-gray-600">{{ $description }}</p>
        @endif
    </div>
</li>
