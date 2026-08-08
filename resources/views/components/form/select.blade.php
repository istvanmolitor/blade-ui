@props(['disabled' => false, 'name', 'value' => null, 'options' => [], 'placeholder' => null])

@php
    $hasError = $errors->has($name);
    $currentValue = old($name, $value);
@endphp

<select
    name="{{ $name }}"
    id="{{ $name }}"
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($hasError ? ' border-red-500' : '')]) !!}
>
    @if ($placeholder)
        <option value="" @selected($currentValue === null)>{{ $placeholder }}</option>
    @endif
    @foreach ($options as $optionValue => $optionLabel)
        <option value="{{ $optionValue }}" @selected((string) $currentValue === (string) $optionValue)>{{ $optionLabel }}</option>
    @endforeach
    {{ $slot }}
</select>
