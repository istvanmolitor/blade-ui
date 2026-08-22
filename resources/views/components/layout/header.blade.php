@use('Molitor\BladeUi\Support\MenuItem')

@php
    $mainMenuItems = MenuItem::collectionFromConfig('main');
@endphp

<header class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <x-ui::layout.logo />

            {{-- Desktop Navigation --}}
            <x-ui::menu.header-menu :items="$mainMenuItems" />

            {{-- Search --}}
            <x-ui::layout.search />

            {{-- Mobile menu button --}}
            <x-ui::menu.mobile-menu-button />
        </div>

        {{-- Mobile Navigation --}}
        <x-ui::menu.mobile-menu :items="$mainMenuItems" />
    </div>

    {{-- Content Region for custom header content --}}
    <div class="bg-gray-50">
        @yield('header')
    </div>
</header>
