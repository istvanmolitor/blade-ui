@props(['menuItems' => [], 'footerMenuItems' => []])

@include('blade-ui::layouts.partials.header', ['items' => $menuItems])
@yield('top')
{{ $slot }}
@yield('bottom')
@include('blade-ui::layouts.partials.footer', ['items' => $footerMenuItems])
@yield('script')
