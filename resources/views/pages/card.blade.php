@extends('blade-ui::layouts.demo')

@section('title', 'Kártyák')
@section('description', 'components/card &mdash; összetehető kártya komponensek (header, body, footer).')

@section('content')
    @php
        $titleDescriptionCardCode = <<<'BLADE'
<x-ui::card.card>
    <x-ui::card.header title="Előfizetés" description="Havi csomag részletei." />
    <x-ui::card.body>
        <x-ui::typography.paragraph>A kártya body szekciója tetszőleges tartalmat fogadhat.</x-ui::typography.paragraph>
    </x-ui::card.body>
</x-ui::card.card>
BLADE;

        $footerActionsCardCode = <<<'BLADE'
<x-ui::card.card>
    <x-ui::card.header title="Projekt törlése" description="Ez a művelet nem vonható vissza." />
    <x-ui::card.body>
        <x-ui::typography.paragraph>A projekt és minden hozzá tartozó adat véglegesen törlődik.</x-ui::typography.paragraph>
    </x-ui::card.body>
    <x-ui::card.footer>
        <x-ui::buttons.ghost-button>Mégse</x-ui::buttons.ghost-button>
        <x-ui::buttons.danger-button>Törlés</x-ui::buttons.danger-button>
    </x-ui::card.footer>
</x-ui::card.card>
BLADE;
    @endphp

    <div class="space-y-10">
        <x-ui::demo.example label="Cím és leírás" :code="$titleDescriptionCardCode">
            <x-ui::card.card>
                <x-ui::card.header title="Előfizetés" description="Havi csomag részletei." />
                <x-ui::card.body>
                    <x-ui::typography.paragraph>A kártya body szekciója tetszőleges tartalmat fogadhat.</x-ui::typography.paragraph>
                </x-ui::card.body>
            </x-ui::card.card>
        </x-ui::demo.example>

        <x-ui::demo.example label="Lábléc műveletekkel" :code="$footerActionsCardCode">
            <x-ui::card.card>
                <x-ui::card.header title="Projekt törlése" description="Ez a művelet nem vonható vissza." />
                <x-ui::card.body>
                    <x-ui::typography.paragraph>A projekt és minden hozzá tartozó adat véglegesen törlődik.</x-ui::typography.paragraph>
                </x-ui::card.body>
                <x-ui::card.footer>
                    <x-ui::buttons.ghost-button>Mégse</x-ui::buttons.ghost-button>
                    <x-ui::buttons.danger-button>Törlés</x-ui::buttons.danger-button>
                </x-ui::card.footer>
            </x-ui::card.card>
        </x-ui::demo.example>
    </div>
@endsection
