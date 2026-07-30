@extends('blade-ui::layouts.base')

@section('body')
    <x-ui::layout-shell>
        <x-ui::page-shell>
            @include('blade-ui::layouts.partials.main')
        </x-ui::page-shell>
    </x-ui::layout-shell>
@endsection
