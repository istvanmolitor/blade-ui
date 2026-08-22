@extends('blade-ui::layouts.demo')

@section('title', 'Menük')
@section('description', 'components/menu &mdash; fejléc, mobil, oldalsáv és lábléc menük, több szintű, ikonokkal ellátott, lenyíló almenükkel.')

@section('content')
    <div class="grid gap-10">
        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::menu.header-menu&gt;</p>
            <p class="mb-3 text-xs text-gray-400">Egérrel rávitelre vagy kattintásra nyílik, tetszőleges mélységben ágyazott almenükkel (a "Szolgáltatások" &rarr; "Karbantartás" almenü jobbra nyílik ki).</p>
            <div class="rounded-lg border border-gray-200 bg-white p-4">
                <x-ui::menu.header-menu :items="$items" />
            </div>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::menu.mobile-menu-button&gt; / &lt;x-ui::menu.mobile-menu&gt;</p>
            <p class="mb-3 text-xs text-gray-400">Csak mobil nézetben (md alatt) jelenik meg, a fejléc mobil navigációjának megfelelően.</p>
            <div class="rounded-lg border border-gray-200 bg-white p-4">
                <div class="flex justify-end">
                    <x-ui::menu.mobile-menu-button />
                </div>
                <x-ui::menu.mobile-menu :items="$items" />
            </div>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::menu.sidebar-menu&gt;</p>
            <p class="mb-3 text-xs text-gray-400">Kattintásra lenyíló, több szintű almenü ("Beállítások" alatt).</p>
            <div class="max-w-xs rounded-lg border border-gray-200 bg-white p-4">
                <x-ui::menu.sidebar-menu :items="$sidebarItems" />
            </div>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::menu.footer-menu&gt;</p>
            <div class="max-w-xs rounded-lg border border-gray-200 bg-white p-4">
                <x-ui::menu.footer-menu :items="$footerItems" />
            </div>
        </div>
    </div>
@endsection
