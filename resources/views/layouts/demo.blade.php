@extends('blade-ui::layouts.left-sidebar')

@use('Molitor\BladeUi\Http\Controllers\ComponentShowcaseController')
@use('Molitor\BladeUi\Support\MenuItem')

@section('sidebar')
    @php
        $sidebarMenuItems = MenuItem::collectionFromArray(
            collect(ComponentShowcaseController::sections())
                ->map(fn (string $label, string $route) => [
                    'label' => $label,
                    'url' => route($route),
                    'active' => request()->routeIs($route) || request()->routeIs("{$route}.*"),
                ])
                ->values()
                ->all()
        );
    @endphp

    <x-ui::menu.sidebar-menu :items="$sidebarMenuItems" />
@endsection