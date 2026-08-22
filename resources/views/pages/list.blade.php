@extends('blade-ui::layouts.demo')

@section('title', 'Listák')
@section('description', 'components/list &mdash; checklist, lépés (step), leírás (description) és elem (item) listák.')

@section('content')
    @php
        $checklistCode = <<<'BLADE'
<x-ui::list.checklist-items>
    <x-ui::list.checklist-item icon="check-circle-2" description="Regisztrálj egy fiókot a kezdéshez.">
        Fiók létrehozása
    </x-ui::list.checklist-item>
    <x-ui::list.checklist-item icon="check-circle-2" description="Add meg a projekt alapadatait.">
        Projekt beállítása
    </x-ui::list.checklist-item>
    <x-ui::list.checklist-item icon="check-circle-2" description="Hívd meg a csapattagokat.">
        Csapat meghívása
    </x-ui::list.checklist-item>
</x-ui::list.checklist-items>
BLADE;

        $stepsCode = <<<'BLADE'
<x-ui::list.steps>
    <x-ui::list.step :number="1" description="Telepítsd a csomagot Composerrel.">
        Telepítés
    </x-ui::list.step>
    <x-ui::list.step :number="2" description="Regisztráld a service providert.">
        Konfiguráció
    </x-ui::list.step>
    <x-ui::list.step :number="3" description="Használd a komponenseket a nézeteidben.">
        Használat
    </x-ui::list.step>
</x-ui::list.steps>
BLADE;

        $descriptionListCode = <<<'BLADE'
<x-ui::list.description-list>
    <x-ui::list.description-item term="Terv">Pro</x-ui::list.description-item>
    <x-ui::list.description-item term="Ár">9 990 Ft / hó</x-ui::list.description-item>
    <x-ui::list.description-item term="Következő számlázás">2026. 09. 22.</x-ui::list.description-item>
    <x-ui::list.description-item term="Állapot">Aktív</x-ui::list.description-item>
</x-ui::list.description-list>
BLADE;

        $itemListCode = <<<'BLADE'
<x-ui::list.item-list>
    <x-ui::list.item icon="user" description="kovacs.janos@example.com">
        Kovács János
        <x-slot:trailing>
            <span class="rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700">Aktív</span>
        </x-slot:trailing>
    </x-ui::list.item>
    <x-ui::list.item icon="user" description="nagy.eva@example.com">
        Nagy Éva
        <x-slot:trailing>
            <span class="rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">Meghívva</span>
        </x-slot:trailing>
    </x-ui::list.item>
</x-ui::list.item-list>
BLADE;
    @endphp

    <div class="grid gap-10 sm:grid-cols-2">
        <x-ui::demo.example label="Ellenőrzőlista" :code="$checklistCode">
            <x-ui::list.checklist-items>
                <x-ui::list.checklist-item icon="check-circle-2" description="Regisztrálj egy fiókot a kezdéshez.">
                    Fiók létrehozása
                </x-ui::list.checklist-item>
                <x-ui::list.checklist-item icon="check-circle-2" description="Add meg a projekt alapadatait.">
                    Projekt beállítása
                </x-ui::list.checklist-item>
                <x-ui::list.checklist-item icon="check-circle-2" description="Hívd meg a csapattagokat.">
                    Csapat meghívása
                </x-ui::list.checklist-item>
            </x-ui::list.checklist-items>
        </x-ui::demo.example>

        <x-ui::demo.example label="Lépések" :code="$stepsCode">
            <x-ui::list.steps>
                <x-ui::list.step :number="1" description="Telepítsd a csomagot Composerrel.">
                    Telepítés
                </x-ui::list.step>
                <x-ui::list.step :number="2" description="Regisztráld a service providert.">
                    Konfiguráció
                </x-ui::list.step>
                <x-ui::list.step :number="3" description="Használd a komponenseket a nézeteidben.">
                    Használat
                </x-ui::list.step>
            </x-ui::list.steps>
        </x-ui::demo.example>

        <x-ui::demo.example label="Leírás lista" :code="$descriptionListCode">
            <x-ui::list.description-list>
                <x-ui::list.description-item term="Terv">Pro</x-ui::list.description-item>
                <x-ui::list.description-item term="Ár">9 990 Ft / hó</x-ui::list.description-item>
                <x-ui::list.description-item term="Következő számlázás">2026. 09. 22.</x-ui::list.description-item>
                <x-ui::list.description-item term="Állapot">Aktív</x-ui::list.description-item>
            </x-ui::list.description-list>
        </x-ui::demo.example>

        <x-ui::demo.example label="Elemlista" :code="$itemListCode">
            <x-ui::list.item-list>
                <x-ui::list.item icon="user" description="kovacs.janos@example.com">
                    Kovács János
                    <x-slot:trailing>
                        <span class="rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700">Aktív</span>
                    </x-slot:trailing>
                </x-ui::list.item>
                <x-ui::list.item icon="user" description="nagy.eva@example.com">
                    Nagy Éva
                    <x-slot:trailing>
                        <span class="rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">Meghívva</span>
                    </x-slot:trailing>
                </x-ui::list.item>
            </x-ui::list.item-list>
        </x-ui::demo.example>
    </div>
@endsection
