@props([
    'title' => config('app.name', 'Laravel'),
    'logoIcon' => null,
    'items' => [],
])

<header {{ $attributes->merge(['class' => 'sticky top-0 z-50 border-b border-gray-100 bg-white/80 backdrop-blur-lg']) }}>
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <x-ui::layout.logo :text="$title" :icon="$logoIcon" />

        <div class="hidden md:block">
            <x-ui::layout.main-menu :items="$items" />
        </div>

        <div class="hidden items-center gap-3 md:flex">
            {{ $slot }}
        </div>

        <button
            type="button"
            class="grid h-10 w-10 place-items-center rounded-lg border border-gray-200 text-gray-700 md:hidden"
            onclick="document.getElementById('header-mobile-menu').classList.toggle('hidden')"
            aria-label="Menü"
        >
            <x-ui::layout.icon name="menu" class="h-5 w-5" />
        </button>
    </div>

    <div id="header-mobile-menu" class="hidden border-t border-gray-100 bg-white md:hidden">
        <nav class="mx-auto flex max-w-7xl flex-col gap-1 px-4 py-3">
            @foreach ($items as $item)
                <a
                    href="{{ $item->getUrl() ?? '#' }}"
                    class="rounded-lg px-3 py-2.5 text-sm font-medium {{ $item->isActive() ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-indigo-50 hover:text-indigo-600' }}"
                >
                    {{ $item->getLabel() }}
                </a>
            @endforeach

            <div class="mt-2 flex flex-col gap-2">
                {{ $slot }}
            </div>
        </nav>
    </div>
</header>
