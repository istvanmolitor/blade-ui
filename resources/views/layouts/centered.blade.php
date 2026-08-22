@extends('blade-ui::layouts.base')

@section('body')
    <x-ui::layout.layout-shell>
        <x-ui::page-shell>
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 sm:px-10">
                    <x-ui::layout.main />
                </div>
            </div>
        </x-ui::page-shell>
    </x-ui::layout.layout-shell>
@endsection
