@props(['items' => []])

<header class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <x-ui::layout.partials.logo />

            {{-- Desktop Navigation --}}
            <x-ui::layout.partials.menu :items="$items" />

            {{-- Search --}}
            <x-ui::layout.partials.search />

            {{-- Mobile menu button --}}
            <x-ui::layout.partials.mobile-menu-button />
        </div>

        {{-- Mobile Navigation --}}
        <x-ui::layout.partials.mobile-menu :items="$items" />
    </div>

    {{-- Content Region for custom header content --}}
    <div class="bg-gray-50">
        @yield('header')
    </div>
</header>
