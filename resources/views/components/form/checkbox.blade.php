@props(['disabled' => false, 'name', 'checked' => false, 'value' => '1'])

@php
    $isChecked = (bool) old($name, $checked);
@endphp

<input
    type="checkbox"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ $value }}"
    @checked($isChecked)
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['class' => 'h-4 w-4 rounded border-gray-300 accent-blue-600']) }}
>
