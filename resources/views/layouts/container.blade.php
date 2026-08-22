@extends('blade-ui::layouts.base')

@section('body')
    <x-ui::layout.layout-shell>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <x-ui::page-shell>
                <x-ui::layout.main />
            </x-ui::page-shell>
        </div>
    </x-ui::layout.layout-shell>
@endsection
