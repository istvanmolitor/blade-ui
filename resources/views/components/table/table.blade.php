@props([])

<div class="overflow-x-auto rounded-2xl border border-gray-200">
    <table {{ $attributes->merge(['class' => 'min-w-full divide-y divide-gray-200']) }}>
        {{ $slot }}
    </table>
</div>
