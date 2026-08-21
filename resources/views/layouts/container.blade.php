@extends('blade-ui::layouts.base')

@section('body')
    <x-ui::layout.layout-shell :menu-items="$menuItems ?? []" :footer-menu-items="$footerMenuItems ?? []">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <x-ui::page-shell>
                <x-ui::layout.partials.main />
            </x-ui::page-shell>
        </div>
    </x-ui::layout.layout-shell>
@endsection
