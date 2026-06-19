@props(['disabled' => false, 'rows' => 5, 'name', 'value' => null])

@php
    $hasError = $errors->has($name);
    $currentValue = old($name, $value);
@endphp

<textarea
    name="{{ $name }}"
    id="{{ $name }}"
    rows="{{ $rows }}"
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($hasError ? ' border-red-500' : '')]) !!}
>{{ $currentValue }}</textarea>
