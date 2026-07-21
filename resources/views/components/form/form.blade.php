@props(['action', 'method' => 'POST'])

@php $realMethod = strtoupper($method); @endphp

<form action="{{ $action }}" method="{{ in_array($realMethod, ['GET', 'POST']) ? $realMethod : 'POST' }}"
    {{ $attributes }}>
    @csrf
    @if(!in_array($realMethod, ['GET', 'POST']))
        @method($realMethod)
    @endif

    {{ $slot }}
</form>
