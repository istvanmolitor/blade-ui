@props(['disabled' => false])

@php $hasError = $errors->has($attributes->get('name')); @endphp

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($hasError ? ' border-red-500' : '')]) !!}>
