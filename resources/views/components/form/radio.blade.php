@props(['disabled' => false, 'name', 'value', 'checked' => false])

<input
    type="radio"
    name="{{ $name }}"
    value="{{ $value }}"
    @checked($checked)
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['class' => 'h-4 w-4 border-gray-300 accent-blue-600']) }}
>
