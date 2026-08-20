@extends('blade-ui::layouts.demo')

@section('title', 'Kártyák')
@section('description', 'components/card &mdash; összetehető kártya komponensek (header, body, footer).')

@section('content')
    <div class="grid gap-10 sm:grid-cols-2">
        <div>
            <x-ui::typography.paragraph class="mb-3 text-sm !text-gray-500">
                <x-ui::typography.bold>&lt;x-ui::card.card&gt; &mdash; cím és leírás</x-ui::typography.bold>
            </x-ui::typography.paragraph>
            <x-ui::card.card>
                <x-ui::card.header title="Előfizetés" description="Havi csomag részletei." />
                <x-ui::card.body>
                    <x-ui::typography.paragraph>A kártya body szekciója tetszőleges tartalmat fogadhat.</x-ui::typography.paragraph>
                </x-ui::card.body>
            </x-ui::card.card>
        </div>

        <div>
            <x-ui::typography.paragraph class="mb-3 text-sm !text-gray-500">
                <x-ui::typography.bold>&lt;x-ui::card.card&gt; &mdash; footer műveletekkel</x-ui::typography.bold>
            </x-ui::typography.paragraph>
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
        </div>
    </div>
@endsection
