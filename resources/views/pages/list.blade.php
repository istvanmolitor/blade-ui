@extends('blade-ui::layouts.demo')

@section('title', 'Listák')
@section('description', 'components/list &mdash; checklist, lépés (step), leírás (description) és elem (item) listák.')

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

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::list.description-list&gt; / &lt;x-ui::list.description-item&gt;</p>
            <x-ui::list.description-list>
                <x-ui::list.description-item term="Terv">Pro</x-ui::list.description-item>
                <x-ui::list.description-item term="Ár">9 990 Ft / hó</x-ui::list.description-item>
                <x-ui::list.description-item term="Következő számlázás">2026. 09. 22.</x-ui::list.description-item>
                <x-ui::list.description-item term="Állapot">Aktív</x-ui::list.description-item>
            </x-ui::list.description-list>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::list.item-list&gt; / &lt;x-ui::list.item&gt;</p>
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
        </div>
    </div>
@endsection
