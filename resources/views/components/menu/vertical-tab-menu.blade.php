@props(['items'])

<nav class="space-y-1" aria-label="Fülek">
    @foreach ($items as $item)
        <a href="{{ $item->getUrl() }}"
           @if ($item->isActive()) aria-current="page" @endif
           class="{{ $item->isActive() ? 'group flex items-center gap-2 rounded-md bg-indigo-50 px-3 py-2 text-sm font-medium text-indigo-700' : 'group flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition-colors' }}">
            @if ($item->getIcon())
                <x-ui::layout.icon :name="$item->getIcon()" class="h-4 w-4 shrink-0" />
            @endif
            <span class="truncate">{{ $item->getLabel() }}</span>
        </a>
    @endforeach
</nav>
