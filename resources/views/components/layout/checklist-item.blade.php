@props(['title' => null, 'icon' => 'check-circle-2'])

<li {{ $attributes->merge(['class' => 'flex gap-3']) }}>
    <x-ui::layout.icon :name="$icon" class="mt-0.5 h-5 w-5 shrink-0 text-indigo-600" />
    <div>
        @if ($title)
            <p class="font-semibold text-gray-900">{{ $title }}</p>
        @endif
        <p class="text-sm text-gray-600">{{ $slot }}</p>
    </div>
</li>
