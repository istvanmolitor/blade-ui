@props([
    'eyebrow' => null,
    'eyebrowIcon' => 'sun',
    'title' => '',
    'highlight' => null,
    'description' => null,
    'primaryHref' => null,
    'primaryLabel' => null,
    'secondaryHref' => null,
    'secondaryLabel' => null,
    'image' => null,
    'imageAlt' => '',
    'badgeIcon' => null,
    'badgeLabel' => null,
    'badgeValue' => null,
])

<section {{ $attributes->merge(['class' => 'relative overflow-hidden bg-gray-50']) }}>
    <div class="absolute inset-0" aria-hidden="true"></div>
    <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-4 pt-16 pb-20 sm:px-6 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:pt-24 lg:pb-28">
        <div>
            @if ($eyebrow)
                <span class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-semibold text-gray-700">
                    <x-ui::layout.icon :name="$eyebrowIcon" class="h-3.5 w-3.5" /> {{ $eyebrow }}
                </span>
            @endif

            <h1 class="mt-5 text-4xl font-bold leading-[1.05] text-gray-900 sm:text-5xl lg:text-6xl">
                {{ $title }}
                @if ($highlight)
                    <span class="block">{{ $highlight }}</span>
                @endif
            </h1>

            @if ($description)
                <p class="mt-6 max-w-xl text-lg text-gray-600">{{ $description }}</p>
            @endif

            @if ($primaryLabel || $secondaryLabel)
                <div class="mt-8 flex flex-wrap gap-3">
                    @if ($primaryLabel)
                        <a href="{{ $primaryHref }}" class="inline-flex items-center gap-2 rounded-full bg-indigo-600 px-6 py-3 text-sm font-semibold text-white transition-transform hover:scale-105">
                            {{ $primaryLabel }} <x-ui::layout.icon name="arrow-right" class="h-4 w-4" />
                        </a>
                    @endif
                    @if ($secondaryLabel)
                        <a href="{{ $secondaryHref }}" class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-6 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-100">
                            {{ $secondaryLabel }}
                        </a>
                    @endif
                </div>
            @endif

            @isset($stats)
                <div class="mt-10 grid max-w-md grid-cols-3 gap-6">
                    {{ $stats }}
                </div>
            @endisset
        </div>

        <div class="relative">
            <div class="absolute -inset-4 rounded-3xl" aria-hidden="true"></div>

            @if ($image)
                <img
                    src="{{ $image }}"
                    alt="{{ $imageAlt }}"
                    width="1600"
                    height="1000"
                    class="relative aspect-[4/3] w-full rounded-3xl object-cover"
                />
            @endif

            @if ($badgeLabel || $badgeValue)
                <div class="absolute -bottom-6 -left-6 hidden max-w-[220px] rounded-2xl border border-gray-200 bg-white/95 p-4 backdrop-blur sm:block">
                    <div class="flex items-center gap-3">
                        @if ($badgeIcon)
                            <div class="grid h-10 w-10 place-items-center rounded-xl bg-gray-100 text-gray-700">
                                <x-ui::layout.icon :name="$badgeIcon" class="h-5 w-5" />
                            </div>
                        @endif
                        <div>
                            @if ($badgeLabel)
                                <p class="text-xs text-gray-500">{{ $badgeLabel }}</p>
                            @endif
                            @if ($badgeValue)
                                <p class="text-lg font-bold text-gray-900">{{ $badgeValue }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
