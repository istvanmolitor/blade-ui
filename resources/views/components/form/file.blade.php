@props(['disabled' => false, 'name', 'multiple' => false, 'accept' => null])

@php
    $hasError = $errors->has($name);
@endphp

<input
    type="file"
    name="{{ $name }}{{ $multiple ? '[]' : '' }}"
    id="{{ $name }}"
    @if ($multiple) multiple @endif
    @if ($accept) accept="{{ $accept }}" @endif
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => 'block w-full text-sm text-gray-700 file:mr-4 file:rounded file:border-0 file:bg-gray-100 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-gray-700 hover:file:bg-gray-200' . ($hasError ? ' border border-red-500 rounded' : '')]) !!}
>
