@props([
    'title' => config('app.name', 'Laravel'),
    'logoIcon' => null,
    'tagline' => null,
    'items' => [],
    'text' => null,
])

<footer {{ $attributes->merge(['class' => 'border-t border-gray-100 bg-gray-50']) }}>
    <div class="mx-auto grid max-w-7xl gap-10 px-4 py-14 sm:px-6 lg:grid-cols-4 lg:px-8">
        <div>
            <x-ui::layout.logo :text="$title" :icon="$logoIcon" />
            @if ($tagline)
                <p class="mt-3 text-sm text-gray-500">{{ $tagline }}</p>
            @endif
        </div>

        @if (count($items) > 0)
            <div>
                <h4 class="text-sm font-semibold text-gray-900">Oldalak</h4>
                <ul class="mt-3 space-y-2 text-sm text-gray-500">
                    @foreach ($items as $item)
                        <li><a href="{{ $item->getUrl() ?? '#' }}" class="hover:text-indigo-600">{{ $item->getLabel() }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (config('blade-ui.phone') || config('blade-ui.email') || config('blade-ui.address'))
            <div>
                <h4 class="text-sm font-semibold text-gray-900">Kapcsolat</h4>
                <ul class="mt-3 space-y-2 text-sm text-gray-500">
                    @if (config('blade-ui.phone'))
                        <li class="flex items-center gap-2"><x-ui::layout.icon name="phone" class="h-4 w-4 text-indigo-600" /> {{ config('blade-ui.phone') }}</li>
                    @endif
                    @if (config('blade-ui.email'))
                        <li class="flex items-center gap-2"><x-ui::layout.icon name="mail" class="h-4 w-4 text-indigo-600" /> {{ config('blade-ui.email') }}</li>
                    @endif
                    @if (config('blade-ui.address'))
                        <li class="flex items-center gap-2"><x-ui::layout.icon name="map-pin" class="h-4 w-4 text-indigo-600" /> {{ config('blade-ui.address') }}</li>
                    @endif
                </ul>
            </div>
        @endif

        {{ $slot }}
    </div>

    <div class="border-t border-gray-100">
        <div class="mx-auto max-w-7xl px-4 py-5 text-center text-xs text-gray-400 sm:px-6 lg:px-8">
            {{ $text ?? '© '.date('Y').' '.$title }}
        </div>
    </div>
</footer>
