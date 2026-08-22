@php
    $items = MenuItem::collectionFromConfig('sidebar');
@endphp

@if($items)
    <nav>
        <ul class="list-none m-0 p-0 space-y-1">
            @foreach ($items as $item)
                <li>
                    <a href="{{ $item->getUrl() }}" class="{{ $item->isActive() ? 'block rounded-md bg-indigo-50 px-3 py-2 text-indigo-600 font-medium' : 'block rounded-md px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-indigo-600 transition-colors' }}">
                        {{ $item->getLabel() }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
@endif
