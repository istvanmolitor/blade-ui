@props(['name' => ''])

<x-dynamic-component :component="'lucide-'.$name" {{ $attributes }} aria-hidden="true" />
