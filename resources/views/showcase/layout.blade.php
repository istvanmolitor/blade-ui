@extends('blade-ui::showcase.partials.wrapper')

@section('title', 'Layout')
@section('description', 'components/layout &mdash; oldalépítő komponensek.')

@section('content')
    <div class="space-y-10">
        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::layout.header&gt;</p>
            <div class="overflow-hidden rounded-2xl border border-gray-200">
                <x-ui::layout.header title="Demo App" logo-icon="sparkles" :items="$menuItems" />
            </div>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::layout.hero&gt;</p>
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
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::layout.section-header&gt;</p>
            <x-ui::layout.section-header eyebrow="Miért mi" description="Rövid leírás a szekcióhoz.">
                Szekció cím
            </x-ui::layout.section-header>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::layout.feature-cards&gt; / &lt;x-ui::layout.feature-card&gt;</p>
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
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::layout.card&gt;</p>
            <x-ui::layout.card title="Kártya cím" class="max-w-md">
                A kártya komponens tetszőleges tartalmat fogadhat.
            </x-ui::layout.card>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::layout.stat&gt;</p>
            <div class="flex flex-wrap gap-10">
                <x-ui::layout.stat value="1200+" label="Aktív felhasználó" />
                <x-ui::layout.stat value="99.9%" label="Rendelkezésre állás" />
                <x-ui::layout.stat value="24/7" label="Támogatás" />
            </div>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::layout.cta&gt;</p>
            <div class="overflow-hidden rounded-2xl border border-gray-200">
                <x-ui::layout.cta title="Kezdd el most" description="Csatlakozz hozzánk még ma." button-label="Regisztráció" href="#" />
            </div>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::layout.footer&gt;</p>
            <div class="overflow-hidden rounded-2xl border border-gray-200">
                <x-ui::layout.footer title="Demo App" tagline="Rövid szlogen a láblécben." :items="$menuItems" />
            </div>
        </div>
    </div>
@endsection
