@extends('blade-ui::layouts.demo')

@section('title', 'Menük')
@section('description', 'components/menu &mdash; fejléc, mobil, oldalsáv és lábléc menük, több szintű, ikonokkal ellátott, lenyíló almenükkel.')

@section('content')
    @php
        $headerMenuCode = <<<'BLADE'
<x-ui::menu.header-menu :items="$items" />
BLADE;

        $mobileMenuCode = <<<'BLADE'
<x-ui::menu.mobile-menu-button />
<x-ui::menu.mobile-menu :items="$items" />
BLADE;

        $sidebarMenuCode = <<<'BLADE'
<x-ui::menu.sidebar-menu :items="$sidebarItems" />
BLADE;

        $footerMenuCode = <<<'BLADE'
<x-ui::menu.footer-menu :items="$footerItems" />
BLADE;

        $tabMenuCode = <<<'BLADE'
<x-ui::menu.tab-menu :items="$tabItems" />
BLADE;

        $verticalTabMenuCode = <<<'BLADE'
<x-ui::menu.vertical-tab-menu :items="$tabItems" />
BLADE;
    @endphp

    <div class="grid gap-10">
        <div>
            <p class="mb-3 text-xs text-gray-400">Egérrel rávitelre vagy kattintásra nyílik, tetszőleges mélységben ágyazott almenükkel (a "Szolgáltatások" &rarr; "Karbantartás" almenü jobbra nyílik ki).</p>
            <x-ui::demo.example label="Fejléc menü" :code="$headerMenuCode">
                <x-ui::menu.header-menu :items="$items" />
            </x-ui::demo.example>
        </div>

        <div>
            <p class="mb-3 text-xs text-gray-400">Csak mobil nézetben (md alatt) jelenik meg, a fejléc mobil navigációjának megfelelően.</p>
            <x-ui::demo.example label="Mobil menü" :code="$mobileMenuCode">
                <div class="flex justify-end">
                    <x-ui::menu.mobile-menu-button />
                </div>
                <x-ui::menu.mobile-menu :items="$items" />
            </x-ui::demo.example>
        </div>

        <div>
            <p class="mb-3 text-xs text-gray-400">Kattintásra lenyíló, több szintű almenü ("Beállítások" alatt).</p>
            <x-ui::demo.example label="Oldalsáv menü" :code="$sidebarMenuCode" class="max-w-xs">
                <x-ui::menu.sidebar-menu :items="$sidebarItems" />
            </x-ui::demo.example>
        </div>

        <div>
            <x-ui::demo.example label="Lábléc menü" :code="$footerMenuCode" class="max-w-xs">
                <x-ui::menu.footer-menu :items="$footerItems" />
            </x-ui::demo.example>
        </div>

        <div>
            <p class="mb-3 text-xs text-gray-400">Vízszintes fül (tab) menü, aláhúzott aktív állapottal.</p>
            <x-ui::demo.example label="Tab menü (vízszintes)" :code="$tabMenuCode">
                <x-ui::menu.tab-menu :items="$tabItems" />
            </x-ui::demo.example>
        </div>

        <div>
            <p class="mb-3 text-xs text-gray-400">Függőleges fül (tab) menü, kiemelt aktív állapottal.</p>
            <x-ui::demo.example label="Tab menü (függőleges)" :code="$verticalTabMenuCode" class="max-w-xs">
                <x-ui::menu.vertical-tab-menu :items="$tabItems" />
            </x-ui::demo.example>
        </div>
    </div>
@endsection
