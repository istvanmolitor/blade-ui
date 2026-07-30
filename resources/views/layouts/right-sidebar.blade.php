@extends('blade-ui::layouts.base')

@section('body')
    <x-ui::layout-shell>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <x-ui::page-shell>
                <div class="flex flex-col lg:flex-row gap-8">
                    <div class="w-full lg:w-3/4">
                        @include('blade-ui::layouts.partials.main')
                    </div>
                    <div class="w-full lg:w-1/4">
                        @include('blade-ui::layouts.partials.sidebar')
                    </div>
                </div>
            </x-ui::page-shell>
        </div>
    </x-ui::layout-shell>
@endsection
