@props(['term' => ''])

<div {{ $attributes->merge(['class' => 'grid grid-cols-1 gap-1 py-4 first:pt-0 last:pb-0 sm:grid-cols-3 sm:gap-4']) }}>
    <dt class="text-sm font-medium text-gray-500">{{ $term }}</dt>
    <dd class="text-sm text-gray-900 sm:col-span-2">{{ $slot }}</dd>
</div>
