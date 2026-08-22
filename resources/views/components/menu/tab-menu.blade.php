@props(['items'])

<div class="border-b border-gray-200">
    <nav class="-mb-px flex gap-8 overflow-x-auto" aria-label="Fülek">
        @foreach ($items as $item)
            <a href="{{ $item->getUrl() }}"
               @if ($item->isActive()) aria-current="page" @endif
               class="{{ $item->isActive() ? 'inline-flex items-center gap-2 whitespace-nowrap border-b-2 border-indigo-600 px-1 py-4 text-sm font-medium text-indigo-600' : 'inline-flex items-center gap-2 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 transition-colors' }}">
                @if ($item->getIcon())
                    <x-ui::layout.icon :name="$item->getIcon()" class="h-4 w-4 shrink-0" />
                @endif
                {{ $item->getLabel() }}
            </a>
        @endforeach
    </nav>
</div>
