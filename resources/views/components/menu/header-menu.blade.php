@props(['items'])

<nav class="hidden md:flex space-x-8">
    <ul class="list-none m-0 p-0 flex items-center gap-8">
        @foreach ($items as $item)
        @php($hasChildren = $item->hasChildren())
        <li class="group relative">
            <a href="{{ $item->getUrl() }}" @if ($hasChildren)
                onclick="event.preventDefault(); this.parentElement.querySelector(':scope > ul')?.classList.toggle('hidden');"
                @endif
                class="{{ $item->isActive() ? 'inline-flex items-center gap-1 text-indigo-600 font-medium border-b-2 border-indigo-600 pb-1' : 'inline-flex items-center gap-1 text-gray-600 hover:text-indigo-600 transition-colors' }}">
                @if ($item->getIcon())
                    <x-ui::layout.icon :name="$item->getIcon()" class="h-4 w-4" />
                @endif
                {{ $item->getLabel() }}
                @if ($hasChildren)
                    <x-ui::layout.icon name="chevron-down" class="h-3.5 w-3.5 transition-transform group-hover:rotate-180" />
                @endif
            </a>

            @if ($hasChildren)
                <x-ui::menu.dropdown :items="$item->getMenuItems()" />
            @endif
        </li>
        @endforeach
    </ul>
</nav>
