@extends('blade-ui::layouts.demo')

@section('title', 'Ikonok')
@section('description', 'components/layout &mdash; a &lt;x-ui::layout.icon&gt; komponenshez elérhető ikonkészlet (Lucide).')

@section('content')
    <div class="space-y-4">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <input
                type="search"
                id="icon-search"
                placeholder="Ikon keresése&hellip; (pl. &quot;arrow&quot;, &quot;user&quot;)"
                autocomplete="off"
                class="w-full max-w-sm rounded-lg border border-gray-200 bg-gray-50 px-3 py-1.5 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent"
            >
            <p class="shrink-0 text-sm text-gray-500">
                <span id="icon-count">{{ count($icons) }}</span> / {{ count($icons) }} ikon
            </p>
        </div>

        <div id="icon-grid" class="grid grid-cols-2 gap-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
            @foreach ($icons as $icon)
                <a href="{{ route('blade-ui.showcase.icons.show', $icon) }}" data-icon-name="{{ $icon }}" class="icon-tile flex flex-col items-center gap-2 rounded-xl border border-gray-200 bg-white p-4 text-center transition-colors hover:border-indigo-300 hover:bg-indigo-50">
                    <x-ui::layout.icon :name="$icon" class="h-6 w-6 text-gray-700" />
                    <span class="w-full truncate text-xs text-gray-500">{{ $icon }}</span>
                </a>
            @endforeach
        </div>

        <p id="icon-empty" class="hidden text-sm text-gray-500">Nincs találat.</p>
    </div>

    <script>
        (function () {
            const input = document.getElementById('icon-search');
            const tiles = Array.from(document.querySelectorAll('#icon-grid .icon-tile'));
            const countEl = document.getElementById('icon-count');
            const emptyEl = document.getElementById('icon-empty');

            input.addEventListener('input', function () {
                const query = input.value.trim().toLowerCase();
                let visible = 0;

                tiles.forEach(function (tile) {
                    const match = tile.dataset.iconName.includes(query);
                    tile.classList.toggle('hidden', !match);
                    visible += match ? 1 : 0;
                });

                countEl.textContent = visible;
                emptyEl.classList.toggle('hidden', visible !== 0);
            });
        })();
    </script>
@endsection
