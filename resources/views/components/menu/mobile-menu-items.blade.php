@props(['items', 'depth' => 0])

<ul class="list-none m-0 p-0 space-y-1 {{ $depth > 0 ? 'mt-1 ml-4 border-l border-gray-200 pl-3' : '' }}">
    @foreach ($items as $item)
        @php($hasChildren = $item->hasChildren())
        <li>
            @if ($hasChildren)
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-2 rounded-md px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-indigo-600 transition-colors [&::-webkit-details-marker]:hidden marker:hidden">
                        <span class="flex items-center gap-2">
                            @if ($item->getIcon())
                                <x-ui::layout.icon :name="$item->getIcon()" class="h-4 w-4 shrink-0" />
                            @endif
                            {{ $item->getLabel() }}
                        </span>
                        <x-ui::layout.icon name="chevron-down" class="h-4 w-4 shrink-0 transition-transform group-open:rotate-180" />
                    </summary>

                    <x-ui::menu.mobile-menu-items :items="$item->getMenuItems()" :depth="$depth + 1" />
                </details>
            @else
                <a href="{{ $item->getUrl() }}" class="{{ $item->isActive() ? 'flex items-center gap-2 rounded-md bg-indigo-50 px-3 py-2 text-indigo-600 font-medium' : 'flex items-center gap-2 rounded-md px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-indigo-600 transition-colors' }}">
                    @if ($item->getIcon())
                        <x-ui::layout.icon :name="$item->getIcon()" class="h-4 w-4 shrink-0" />
                    @endif
                    {{ $item->getLabel() }}
                </a>
            @endif
        </li>
    @endforeach
</ul>
