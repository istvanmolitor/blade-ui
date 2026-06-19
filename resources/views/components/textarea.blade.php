@props(['disabled' => false, 'rows' => 5])

@php $hasError = $errors->has($attributes->get('name')); @endphp

<textarea {{ $disabled ? 'disabled' : '' }} rows="{{ $rows }}" {!! $attributes->merge(['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($hasError ? ' border-red-500' : '')]) !!}>{{ $slot }}</textarea>
