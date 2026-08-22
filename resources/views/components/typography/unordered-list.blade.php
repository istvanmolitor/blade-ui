@props(['items' => []])

<ul {{ $attributes->merge(['class' => 'list-disc pl-6 space-y-2 text-gray-700']) }}>
    @foreach($items as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
