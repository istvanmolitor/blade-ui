@extends('blade-ui::layouts.demo')

@section('title', 'Layout')
@section('description', 'components/layout &mdash; oldalépítő komponensek.')

@section('content')
    @php
        $headerCode = <<<'BLADE'
<x-ui::layout.header />
BLADE;

        $heroCode = <<<'BLADE'
<x-ui::layout.hero
    eyebrow="Új"
    title="Építs gyorsabban"
    highlight="Blade UI-val"
    description="Előre elkészített, testreszabható Blade komponensek Tailwind CSS-sel."
    primary-href="#"
    primary-label="Kezdés"
    secondary-href="#"
    secondary-label="Dokumentáció"
/>
BLADE;

        $sectionHeaderCode = <<<'BLADE'
<x-ui::layout.section-header eyebrow="Miért mi" description="Rövid leírás a szekcióhoz.">
    Szekció cím
</x-ui::layout.section-header>
BLADE;

        $featureCardsCode = <<<'BLADE'
<x-ui::layout.feature-cards>
    <x-ui::layout.feature-card icon="zap" description="Gyors és könnyen testreszabható komponensek.">
        Gyorsaság
    </x-ui::layout.feature-card>
    <x-ui::layout.feature-card icon="shield-check" description="Megbízható, tesztelt komponensviselkedés.">
        Megbízhatóság
    </x-ui::layout.feature-card>
    <x-ui::layout.feature-card icon="paintbrush" description="Tailwind osztályokkal könnyen stílusozható.">
        Testreszabhatóság
    </x-ui::layout.feature-card>
</x-ui::layout.feature-cards>
BLADE;

        $cardCode = <<<'BLADE'
<x-ui::layout.card title="Kártya cím">
    A kártya komponens tetszőleges tartalmat fogadhat.
</x-ui::layout.card>
BLADE;

        $statCode = <<<'BLADE'
<x-ui::layout.stat value="1200+" label="Aktív felhasználó" />
<x-ui::layout.stat value="99.9%" label="Rendelkezésre állás" />
<x-ui::layout.stat value="24/7" label="Támogatás" />
BLADE;

        $ctaCode = <<<'BLADE'
<x-ui::layout.cta title="Kezdd el most" description="Csatlakozz hozzánk még ma." button-label="Regisztráció" href="#" />
BLADE;

        $footerCode = <<<'BLADE'
<x-ui::layout.footer />
BLADE;
    @endphp

    <div class="space-y-10">
        <x-ui::demo.example label="Fejléc" :code="$headerCode">
            <div class="overflow-hidden rounded-2xl border border-gray-200">
                <x-ui::layout.header />
            </div>
        </x-ui::demo.example>

        <x-ui::demo.example label="Hero szekció" :code="$heroCode">
            <div class="overflow-hidden rounded-2xl border border-gray-200">
                <x-ui::layout.hero
                    eyebrow="Új"
                    title="Építs gyorsabban"
                    highlight="Blade UI-val"
                    description="Előre elkészített, testreszabható Blade komponensek Tailwind CSS-sel."
                    primary-href="#"
                    primary-label="Kezdés"
                    secondary-href="#"
                    secondary-label="Dokumentáció"
                />
            </div>
        </x-ui::demo.example>

        <x-ui::demo.example label="Szekció fejléc" :code="$sectionHeaderCode">
            <x-ui::layout.section-header eyebrow="Miért mi" description="Rövid leírás a szekcióhoz.">
                Szekció cím
            </x-ui::layout.section-header>
        </x-ui::demo.example>

        <x-ui::demo.example label="Funkció kártyák" :code="$featureCardsCode">
            <x-ui::layout.feature-cards class="!py-0">
                <x-ui::layout.feature-card icon="zap" description="Gyors és könnyen testreszabható komponensek.">
                    Gyorsaság
                </x-ui::layout.feature-card>
                <x-ui::layout.feature-card icon="shield-check" description="Megbízható, tesztelt komponensviselkedés.">
                    Megbízhatóság
                </x-ui::layout.feature-card>
                <x-ui::layout.feature-card icon="paintbrush" description="Tailwind osztályokkal könnyen stílusozható.">
                    Testreszabhatóság
                </x-ui::layout.feature-card>
            </x-ui::layout.feature-cards>
        </x-ui::demo.example>

        <x-ui::demo.example label="Kártya" :code="$cardCode">
            <x-ui::layout.card title="Kártya cím" class="max-w-md">
                A kártya komponens tetszőleges tartalmat fogadhat.
            </x-ui::layout.card>
        </x-ui::demo.example>

        <x-ui::demo.example label="Statisztika" :code="$statCode">
            <div class="flex flex-wrap gap-10">
                <x-ui::layout.stat value="1200+" label="Aktív felhasználó" />
                <x-ui::layout.stat value="99.9%" label="Rendelkezésre állás" />
                <x-ui::layout.stat value="24/7" label="Támogatás" />
            </div>
        </x-ui::demo.example>

        <x-ui::demo.example label="Felhívás cselekvésre" :code="$ctaCode">
            <div class="overflow-hidden rounded-2xl border border-gray-200">
                <x-ui::layout.cta title="Kezdd el most" description="Csatlakozz hozzánk még ma." button-label="Regisztráció" href="#" />
            </div>
        </x-ui::demo.example>

        <x-ui::demo.example label="Lábléc" :code="$footerCode">
            <div class="overflow-hidden rounded-2xl border border-gray-200">
                <x-ui::layout.footer />
            </div>
        </x-ui::demo.example>
    </div>
@endsection
