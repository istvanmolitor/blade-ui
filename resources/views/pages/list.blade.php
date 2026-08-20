@extends('blade-ui::layouts.demo')

@section('title', 'Listák')
@section('description', 'components/list &mdash; checklist és lépés (step) listák.')

@section('content')
    <div class="grid gap-10 sm:grid-cols-2">
        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::list.checklist-items&gt; / &lt;x-ui::list.checklist-item&gt;</p>
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
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::list.steps&gt; / &lt;x-ui::list.step&gt;</p>
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
        </div>
    </div>
@endsection
