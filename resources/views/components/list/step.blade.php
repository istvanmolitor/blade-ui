@props(['number' => 1, 'description' => null])

<li {{ $attributes->merge(['class' => 'flex gap-4']) }}>
    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-full bg-indigo-600 font-bold text-white">{{ $number }}</span>
    <div>
        @if ($slot->isNotEmpty())
            <p class="font-semibold text-gray-900">{{ $slot }}</p>
        @endif
        @if ($description)
            <p class="text-sm text-gray-600">{{ $description }}</p>
        @endif
    </div>
</li>
