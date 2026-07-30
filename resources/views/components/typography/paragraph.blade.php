@props([])

<div {{ $attributes->merge(['class' => 'text-gray-700 leading-relaxed prose max-w-none']) }}>{!! $slot !!}</div>
