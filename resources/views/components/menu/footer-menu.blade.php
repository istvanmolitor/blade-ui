@props(['items', 'depth' => 0])

<ul class="space-y-2 text-sm {{ $depth > 0 ? 'mt-2 pl-4' : '' }}">
    @foreach ($items as $item)
        <li>
            <a href="{{ $item->getUrl() }}" class="flex items-center gap-2 hover:text-slate-900 transition-colors">
                @if ($item->getIcon())
                    <x-ui::layout.icon :name="$item->getIcon()" class="h-4 w-4 shrink-0" />
                @endif
                {{ $item->getLabel() }}
            </a>

            @if ($item->hasChildren())
                <x-ui::menu.footer-menu :items="$item->getMenuItems()" :depth="$depth + 1" />
            @endif
        </li>
    @endforeach
</ul>
