@props(['disabled' => false, 'name', 'value' => null, 'prefix' => null, 'suffix' => null, 'invalid' => false])

@php
    $hasError = $invalid || $errors->has($name);
    $currentValue = old($name, $value);
@endphp

@if ($prefix || $suffix)
    <div {{ $attributes->only('class')->merge(['class' => 'flex items-stretch overflow-hidden rounded border shadow appearance-none ' . ($hasError ? 'border-red-500' : 'border-gray-300') . ($disabled ? ' bg-gray-100' : '')]) }}>
        @if ($prefix)
            <span class="flex items-center border-r border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">{{ $prefix }}</span>
        @endif
        <input
            name="{{ $name }}"
            id="{{ $name }}"
            value="{{ $currentValue }}"
            {{ $disabled ? 'disabled' : '' }}
            {!! $attributes->except('class')->merge(['class' => 'block w-full border-0 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-0 disabled:cursor-not-allowed disabled:bg-gray-100 disabled:text-gray-500']) !!}
        >
        @if ($suffix)
            <span class="flex items-center border-l border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">{{ $suffix }}</span>
        @endif
    </div>
@else
    <input
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ $currentValue }}"
        {{ $disabled ? 'disabled' : '' }}
        {!! $attributes->merge(['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline disabled:cursor-not-allowed disabled:bg-gray-100 disabled:text-gray-500' . ($hasError ? ' border-red-500' : '')]) !!}
    >
@endif
