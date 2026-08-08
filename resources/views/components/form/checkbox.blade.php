@props(['disabled' => false, 'name', 'checked' => false, 'value' => '1', 'invalid' => false])

@php
    $isChecked = (bool) old($name, $checked);
    $hasError = $invalid || $errors->has($name);
@endphp

<input
    type="checkbox"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ $value }}"
    @checked($isChecked)
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['class' => 'h-4 w-4 rounded border-gray-300 accent-blue-600 disabled:cursor-not-allowed disabled:opacity-50' . ($hasError ? ' outline outline-1 outline-red-500' : '')]) }}
>
