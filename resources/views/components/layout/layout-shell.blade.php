<x-ui::layout.header />
@yield('top')
{{ $slot }}
@yield('bottom')
<x-ui::layout.footer />
@yield('script')
