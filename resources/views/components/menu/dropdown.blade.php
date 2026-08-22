@props(['items', 'flyout' => false])

<ul class="list-none m-0 hidden {{ $flyout ? 'absolute left-full top-0 -mt-2' : 'absolute left-0 top-full mt-2' }} z-50 w-56 space-y-1 rounded-md border border-gray-100 bg-white p-2 shadow-lg group-hover:block group-focus-within:block">
    @foreach ($items as $item)
        @php($hasChildren = $item->hasChildren())
        <li class="group relative">
            <a href="{{ $item->getUrl() }}" @if ($hasChildren)
                onclick="event.preventDefault(); this.parentElement.querySelector(':scope > ul')?.classList.toggle('hidden');"
                @endif
                class="{{ $item->isActive() ? 'flex items-center justify-between gap-2 rounded-md bg-indigo-50 px-3 py-2 text-indigo-600 font-medium' : 'flex items-center justify-between gap-2 rounded-md px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-indigo-600 transition-colors' }}">
                <span class="flex items-center gap-2">
                    @if ($item->getIcon())
                        <x-ui::layout.icon :name="$item->getIcon()" class="h-4 w-4 shrink-0" />
                    @endif
                    {{ $item->getLabel() }}
                </span>
                @if ($hasChildren)
                    <x-ui::layout.icon name="chevron-right" class="h-3.5 w-3.5 shrink-0" />
                @endif
            </a>

            @if ($hasChildren)
                <x-ui::menu.dropdown :items="$item->getMenuItems()" :flyout="true" />
            @endif
        </li>
    @endforeach
</ul>
