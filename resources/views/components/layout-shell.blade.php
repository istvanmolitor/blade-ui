@include('blade-ui::layouts.partials.header')
@yield('top')
{{ $slot }}
@yield('bottom')
@include('blade-ui::layouts.partials.footer')
@yield('script')
