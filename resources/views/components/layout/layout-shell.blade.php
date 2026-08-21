@props(['menuItems' => [], 'footerMenuItems' => []])

<x-ui::layout.partials.header :items="$menuItems" />
@yield('top')
{{ $slot }}
@yield('bottom')
<x-ui::layout.partials.footer :items="$footerMenuItems" />
@yield('script')
