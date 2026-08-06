@props(['value' => '', 'label' => '', 'align' => 'left'])

<div {{ $attributes->merge(['class' => $align === 'center' ? 'text-center' : '']) }}>
    <p class="text-2xl font-bold text-indigo-600 sm:text-3xl">{{ $value }}</p>
    <p class="mt-1 text-xs text-gray-500">{{ $label }}</p>
</div>
