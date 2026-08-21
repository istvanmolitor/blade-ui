@extends('blade-ui::layouts.base')

@section('body')
    <x-ui::layout.layout-shell :menu-items="$menuItems ?? []" :footer-menu-items="$footerMenuItems ?? []">
        <x-ui::page-shell>
            <x-ui::layout.partials.main />
        </x-ui::page-shell>
    </x-ui::layout.layout-shell>
@endsection
