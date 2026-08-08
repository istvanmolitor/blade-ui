@props(['action', 'method' => 'POST'])

@php $realMethod = strtoupper($method); @endphp

<x-ui::feedback.success-message />
<x-ui::feedback.error-messages />

<form action="{{ $action }}" method="{{ in_array($realMethod, ['GET', 'POST']) ? $realMethod : 'POST' }}"
    enctype="multipart/form-data" {{ $attributes }}>
    @csrf
    @if(!in_array($realMethod, ['GET', 'POST']))
        @method($realMethod)
    @endif

    {{ $slot }}
</form>
