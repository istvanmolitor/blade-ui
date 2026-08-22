@props([
    'value' => 0,
    'max' => 5,
    'showValue' => false,
])

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-1']) }}>
    @for ($i = 1; $i <= $max; $i++)
        <x-ui::layout.icon
            name="star"
            class="h-4 w-4 {{ $i <= $value ? 'fill-yellow-400 text-yellow-400' : 'text-gray-300' }}"
        />
    @endfor

    @if ($showValue)
        <span class="ml-1 text-sm font-medium text-gray-600">{{ $value }}/{{ $max }}</span>
    @endif
</span>
