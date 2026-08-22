@props(['items'])

<ul class="space-y-2 text-sm">
    @foreach ($items as $item)
        <li>
            <a href="{{ $item->getUrl() ?? '#' }}" class="hover:text-slate-900 transition-colors">
                {{ $item->getLabel() }}
            </a>
        </li>
    @endforeach
</ul>
