@yield('content-top')
<main>
    <x-ui::typography.h1>
        @yield('page-title')
    </x-ui::typography.h1>
    @yield('content')
</main>
@yield('content-bottom')
